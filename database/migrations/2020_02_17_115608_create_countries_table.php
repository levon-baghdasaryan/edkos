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
            $table->smallIncrements('id');
            $table->string('capital', 255)->nullable();
            $table->string('citizenship', 255)->nullable();
            $table->string('country_code', 3)->nullable();
            $table->string('full_name', 255)->nullable();
            $table->string('iso_3166_2', 2)->nullable();
            $table->string('iso_3166_3', 3)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('region_code', 3)->nullable();
            $table->string('sub_region_code', 3)->nullable();
            $table->boolean('eea')->default(0);
            $table->string('calling_code', 3)->nullable();
            $table->string('flag', 6)->nullable();
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
