<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('courses_id');
            $table->date('beginning');
            $table->string('duration');
            $table->integer('duration_classifier_id');
            $table->string('price');
            $table->string('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_data');
    }
}
