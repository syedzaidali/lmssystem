<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCatehoriesIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('child_catehories', function (Blueprint $table) {
            $table->renameColumn('catehories_id', 'categories_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('child_catehories', function (Blueprint $table) {
            $table->renameColumn('categories_id', 'catehories_id');

            
        });
    }
}
