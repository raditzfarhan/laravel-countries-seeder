<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->string('code', 2)->primary();
            $table->string('iso3', 3);
            $table->string('name', 50);
            $table->string('continent', 2);
            $table->string('currency_code', 5);
            $table->string('currency_name', 20);
            $table->string('currency_symbol', 5);
            $table->string('phone_prefix', 20)->nullable();
            $table->string('postal_code', 50)->nullable();
            $table->string('languages', 50)->nullable();
            $table->string('capital', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
