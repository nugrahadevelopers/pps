<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Admin
Breadcrumbs::for('admin', function (BreadcrumbTrail $trail) {
    $trail->push('Admin');
});

// Admin > Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push(__('dashboard.breadcrumb_name'), route('panel.admin.dashboard.index'));
});

// Admin > Customer
Breadcrumbs::for('customer', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push(__('customer_module.breadcrumb_name'), route('panel.admin.customers.index'));
});

// Admin > Category Item
Breadcrumbs::for('category-item', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push(__('item_module.category_breadcrumb_name'), route('panel.admin.category-item.index'));
});

// Admin > Item
Breadcrumbs::for('item', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push(__('item_module.breadcrumb_name'), route('panel.admin.items.index'));
});

// Admin > Transaction
Breadcrumbs::for('transaction', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push(__('transaction_module.transaction_breadcrumb_name'));
});

// Admin > Transaction > Invoice
Breadcrumbs::for('transaction.invoice', function (BreadcrumbTrail $trail) {
    $trail->parent('transaction');
    $trail->push(__('transaction_module.invoice_breadcrumb_name'));
});

// Admin > Transaction > Sales
Breadcrumbs::for('transaction.sales', function (BreadcrumbTrail $trail) {
    $trail->parent('transaction');
    $trail->push(__('transaction_module.sales_breadcrumb_name'));
});

// Admin > User
Breadcrumbs::for('user', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push(__('user_module.breadcrumb_name'), route('panel.admin.users.index'));
});

// Admin > Role
Breadcrumbs::for('role', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push(__('role_module.breadcrumb_name'), route('panel.admin.roles.index'));
});
