<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'Product']);
        Permission::create(['name' => 'Category']);
        Permission::create(['name' => 'Cms-page']);
        Permission::create(['name' => 'Cms-block']);
        Permission::create(['name' => 'Role-Permission']);
        Permission::create(['name' => 'User']);
        Permission::create(['name' => 'Order']);
        Permission::create(['name' => 'Invoice']);
        Permission::create(['name' => 'Refund']);
        Permission::create(['name' => 'Blog']);
        Permission::create(['name' => 'Vendor']);
        Permission::create(['name' => 'Brand']);
        Permission::create(['name' => 'Abandon-cart']);
        Permission::create(['name' => 'Url-rewrite']);
        Permission::create(['name' => 'Configuration']);
        Permission::create(['name' => 'Customer']);
        Permission::create(['name' => 'Catalog-price-rule']);
        Permission::create(['name' => 'Cart-price-rule']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('Product');
        $role1->givePermissionTo('Category');
        $role1->givePermissionTo('Cms-page');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('Cms-block');
        $role2->givePermissionTo('Product');
        $role2->givePermissionTo('Role-Permission');
        $role2->givePermissionTo('Customer');
        $role2->givePermissionTo('User');
        $role2->givePermissionTo('Configuration');

        $role3 = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = Factory(App\User::class)->create([
            'name'     => 'Example User',
            'password' => bcrypt('password'),
            'email'    => 'test@example.com',
        ]);
        $user->assignRole($role1);

        $user = Factory(App\User::class)->create([
            'name'     => 'Example Admin User',
            'password' => bcrypt('password'),
            'email'    => 'admin@example.com',
        ]);
        $user->assignRole($role2);

        $user = Factory(App\User::class)->create([
            'name'     => 'Super-Admin',
            'password' => bcrypt('password'),
            'email'    => 'super@admin.com',
        ]);
        $user->assignRole($role3);


    }
}
