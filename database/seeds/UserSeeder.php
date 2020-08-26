<?php

use Faker\Factory as Faker;
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
        $faker = Faker::create();
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'Product']);
        Permission::create(['name' => 'Category']);
        Permission::create(['name' => 'Cms-page']);
        Permission::create(['name' => 'Cms-block']);
        Permission::create(['name' => 'Role Permission']);
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
        $role2->givePermissionTo('Role permission');
        $role2->givePermissionTo('Customer');
        $role2->givePermissionTo('User');
        $role2->givePermissionTo('Configuration');

        $role3 = Role::create(['name' => 'super-admin']);
        $role4 = Role::create(['name' => 'customer']);
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

        for ($i = 1; $i <= env('SAMPLE_CUSTOMER_COUNT',20); $i++) {
            $user = Factory(App\User::class)->create([
                'name'     => $faker->name,
                'password' => bcrypt('password'),
                'email'    => $faker->email,
            ]);
            $user->assignRole($role4);

            $customer = \App\Models\Customer::create([
                'user_id'           => $user->id,
                'first_name'        => $faker->firstName,
                'last_name'         => $faker->lastName,
                'gender'            => 'male',
                'customer_group_id' => 1,
                'country'           => $faker->country
            ]);

            $on = 1;
            for ($j = 1; $j <= 2; $j++) {

                \App\Models\CustomerAddress::create([
                    'customer_id'      => $customer->id,
                    'first_name'       => $faker->firstName,
                    'last_name'        => $faker->lastName,
                    'address_line_1'   => $faker->streetAddress,
                    'telephone'        => $faker->phoneNumber,
                    'city'             => $faker->city,
                    'default_shipping' => $on ? 1 : 0,
                    'default_billing'  => $on ? 1 : 0,
                    'postcode'         => $faker->postcode,
                    'country'          => $faker->country,
                ]);

                $on = 0;
            }
        }


    }
}
