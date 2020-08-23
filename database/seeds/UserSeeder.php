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
        $role4 = Role::create(['name' => 'ccustomer']);
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

        for ($i = 1; $i <= 50; $i++) {
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
