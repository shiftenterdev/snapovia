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
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('edit articles');
        $role1->givePermissionTo('delete articles');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('publish articles');
        $role2->givePermissionTo('unpublish articles');

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
