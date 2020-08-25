<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));

        $pages = ['Contact', 'Terms & Condition', 'Privacy Policy', 'About Us'];

        foreach ($pages as $key => $page) {

            $url_key = Str::slug($page);

            $model = \App\Models\CmsPage::create([
                'title'           => $page,
                'url_key'         => $url_key,
                'meta_title'      => $page,
                'content_heading' => $faker->sentence,
                'content'         => $faker->paragraph(6)
            ]);


            \App\Models\UrlResolver::create([
                'entity_id'   => $model->id,
                'entity_type' => 'page',
                'url_key'     => $url_key,
                'url_path'    => null
            ]);
        }
    }
}
