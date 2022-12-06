<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class ContentItemsTableSeeder
 */
class ContentItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('content_items')->insert([
            'language' => 'en',
            'route' => 'contacts',
            'header' => 'Contacts',
            'text' => 'Sauletekio al. 11',
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s')
        ]);

        DB::table('content_items')->insert([
            'language' => 'en',
            'route' => 'about',
            'header' => 'About us ',
            'text' => 'VGTU IT school',
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s')
        ]);



        DB::table('content_items')->insert([
            'language' => 'lt',
            'route' => 'contacts',
            'header' => 'Kontaktai',
            'text' => 'Sauletekio al. 11',
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s')
        ]);

        DB::table('content_items')->insert([
            'language' => 'lt',
            'route' => 'about',
            'header' => 'Apie mus',
            'text' => 'VGTU IT mokykla',
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s')
        ]);
    }
}
