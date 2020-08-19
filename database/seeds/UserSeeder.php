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
        Permission::create(['name' => 'product']);
        Permission::create(['name' => 'category']);
        Permission::create(['name' => 'cms-page']);
        Permission::create(['name' => 'cms-block']);
        Permission::create(['name' => 'role permission']);
        Permission::create(['name' => 'user']);
        Permission::create(['name' => 'order']);
        Permission::create(['name' => 'invoice']);
        Permission::create(['name' => 'refund']);
        Permission::create(['name' => 'blog']);
        Permission::create(['name' => 'vendor']);
        Permission::create(['name' => 'brand']);
        Permission::create(['name' => 'abandon-cart']);
        Permission::create(['name' => 'url-rewrite']);
        Permission::create(['name' => 'configuration']);
        Permission::create(['name' => 'customer']);
        Permission::create(['name' => 'catalog-price-rule']);
        Permission::create(['name' => 'cart-price-rule']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('product');
        $role1->givePermissionTo('category');
        $role1->givePermissionTo('cms-page');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('cms-block');
        $role2->givePermissionTo('product');
        $role2->givePermissionTo('role permission');
        $role2->givePermissionTo('customer');
        $role2->givePermissionTo('user');
        $role2->givePermissionTo('configuration');

        $role3 = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = Factory(App\User::class)->create([
            'name'     => 'Example User',
            'username' => 'admin1',
            'password' => bcrypt('password'),
            'email'    => 'test@example.com',
        ]);
        $user->assignRole($role1);

        $user = Factory(App\User::class)->create([
            'name'     => 'Example Admin User',
            'username' => 'admin2',
            'password' => bcrypt('password'),
            'email'    => 'admin@example.com',
        ]);
        $user->assignRole($role2);

        $user = Factory(App\User::class)->create([
            'name'     => 'Super-Admin',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'email'    => 'super@admin.com',
        ]);
        $user->assignRole($role3);
    }
}
