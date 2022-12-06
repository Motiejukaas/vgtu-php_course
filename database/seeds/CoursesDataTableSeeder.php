<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = 'courses_data';

        $columns = [
            [
                'language' => 'en',
                'courses_id' => '1',
                'beginning' => '2019-09-23',
                'duration' => '3 mos.',
                'price' => '195 €*',
                'age' => '11-14'
            ],
            [
                'language' => 'lt',
                'courses_id' => '1',
                'beginning' => '2019-09-23',
                'duration' => '3 mėn.',
                'price' => '195 €*',
                'age' => '11-14'
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
