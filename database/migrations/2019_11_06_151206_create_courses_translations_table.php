<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('courses_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->text('description');

            $table->unique(['courses_id', 'locale']);
            $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_translations');
    }
}
