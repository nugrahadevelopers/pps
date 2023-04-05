<?php

namespace App\Enums;

enum UserRole: string
{
    case SUPER_ADMIN = "Super Admin";
    case STAFF       = "Staff";
    case CUSTOMER    = "Customer";
}
