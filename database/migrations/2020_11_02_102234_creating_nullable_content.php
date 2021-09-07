<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatingNullableContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menu_products', function (Blueprint $table) {
            $table->text('calories')->nullable()->change();
            $table->text('weight')->nullable()->change();
            $table->text('custom_field')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu_products', function (Blueprint $table) {
            //
        });
    }
}
