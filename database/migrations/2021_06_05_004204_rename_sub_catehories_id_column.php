<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameSubCatehoriesIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('child_catehories', function (Blueprint $table) {
            $table->renameColumn('sub_catehories_id', 'sub_categories_id');
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
            $table->renameColumn('sub_categories_id', 'sub_catehories_id');
        });
    }
}
