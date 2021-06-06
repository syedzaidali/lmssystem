<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('users_id');
            $table->integer('categories_id');
            $table->integer('sub_categories_id');
            $table->integer('child_categories_id');
            $table->string('name');
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
            $table->integer('price');
            $table->integer('featured')->nullable();
            $table->integer('status');
            $table->integer('hot')->nullable();
            $table->integer('latest')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
