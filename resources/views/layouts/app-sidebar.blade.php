<nav class="flex-1 px-2 bg-white">
    <x-theme.sidebar-container>
        <x-theme.sidebar-link :url="route('panel.admin.dashboard.index')" :active="request()->routeIs('panel.admin.dashboard.index')" icon="fa-solid fa-chart-pie">Dashboard
        </x-theme.sidebar-link>
        <x-theme.sidebar-link :url="route('panel.admin.transactions.invoice.index')" :active="request()->routeIs('panel.admin.transactions.*')" icon="fa-solid fa-cart-shopping">Transaction
        </x-theme.sidebar-link>
        <x-theme.sidebar-link :url="route('panel.admin.customers.index')" :active="request()->routeIs('panel.admin.customers.*')" icon="fa-solid fa-users-viewfinder">Customers
        </x-theme.sidebar-link>
        <x-theme.sidebar-dropdown label="Items" :active="request()->routeIs('panel.admin.category-item.*') || request()->routeIs('panel.admin.items.*')" icon="fa-solid fa-boxes-stacked">
            {{-- <x-theme.sidebar-dropdown-link :url="route('panel.admin.category-item.index')" :active="request()->routeIs('panel.admin.category-item.*')" icon="fa-solid fa-box-archive">Categories
            </x-theme.sidebar-dropdown-link> --}}
            <x-theme.sidebar-dropdown-link :url="route('panel.admin.items.index')" :active="request()->routeIs('panel.admin.items.*')" icon="fa-solid fa-boxes-stacked">Items
            </x-theme.sidebar-dropdown-link>
        </x-theme.sidebar-dropdown>
        {{-- <x-theme.sidebar-dropdown label="Reporting" :active="false" icon="fa-solid fa-print">
            <x-theme.sidebar-dropdown-link url="#" :active="false" icon="fa-regular fa-file">Monthly Report
            </x-theme.sidebar-dropdown-link>
        </x-theme.sidebar-dropdown> --}}
        <x-theme.sidebar-dropdown label="Users" :active="request()->routeIs('panel.admin.users.*') || request()->routeIs('panel.admin.roles.*')" icon="fa-solid fa-users">
            <x-theme.sidebar-dropdown-link :url="route('panel.admin.users.index')" :active="request()->routeIs('panel.admin.users.*')" icon="fa-solid fa-users">Users
            </x-theme.sidebar-dropdown-link>
            <x-theme.sidebar-dropdown-link :url="route('panel.admin.roles.index')" :active="request()->routeIs('panel.admin.roles.*')" icon="fa-solid fa-user-shield">Roles
            </x-theme.sidebar-dropdown-link>
        </x-theme.sidebar-dropdown>
    </x-theme.sidebar-container>
</nav>
