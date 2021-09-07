<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResellerIdToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->integer('id_reseller')->nullable();
        });
        Schema::table('deals', function (Blueprint $table) {
            $table->integer('id_reseller')->nullable();
        });
        Schema::table('waiters', function (Blueprint $table) {
            $table->integer('id_reseller')->nullable();
        });
        Schema::table('reviews', function (Blueprint $table) {
            $table->integer('id_reseller')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            //
        });
    }
}
