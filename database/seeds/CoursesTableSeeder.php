<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $table_name = 'courses';

        $columns = [
            [
                'language' => 'en',
                'name' => 'I Course',
                'description' => "* one month's price - 65€."
            ],
            [
                'language' => 'lt',
                'name' => 'I Kursas',
                'description' => '* vieno mėn. kaina – 65 €.',

            ]
        ];
        $static_columns = [
            'created_at' => date('Y-m-d h:m:s'),
            'updated_at' => date('Y-m-d h:m:s')
        ];

        foreach ($columns as $column) {
            DB::table($table_name)->insert($column + $static_columns);
        }
    }
}
