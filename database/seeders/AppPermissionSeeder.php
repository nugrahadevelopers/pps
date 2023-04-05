<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class AppPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $default_user_value = [
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];

        $superAdminUser = User::create(array_merge([
            'name' => 'Super Admin',
            'email' => 'admin@mail.com',
        ], $default_user_value));

        $staffUser = User::create(array_merge([
            'name' => 'Staff',
            'email' => 'staff@mail.com',
        ], $default_user_value));

        $superAdminRole              = Role::create(['name' => UserRole::SUPER_ADMIN->value]);
        $staffRole                   = Role::create(['name' => UserRole::STAFF->value]);
        $customerRole                = Role::create(['name' => UserRole::CUSTOMER->value]);

        $authorities = config('permission.authorities');

        $listPermission       = [];
        $superAdminPermission = [];
        $staffPermission      = [];

        foreach ($authorities as $label => $permissions) {
            foreach ($permissions as $permission) {
                $listPermission[] = [
                    'name'       => $permission,
                    'guard_name' => 'web',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];

                $superAdminPermission[] = $permission;

                if ($label == 'module_sales_transaction') {
                    $staffPermission[] = $permission;
                }
            }
        }

        Permission::insert($listPermission);
        $superAdminRole->syncPermissions($superAdminPermission);
        $superAdminUser->syncRoles(UserRole::SUPER_ADMIN->value);

        $staffRole->syncPermissions($staffPermission);
        $staffUser->syncRoles(UserRole::STAFF->value);
    }
}
