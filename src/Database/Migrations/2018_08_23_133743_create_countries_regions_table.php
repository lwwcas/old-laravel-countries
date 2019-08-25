<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries_regions', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            $table->timestamps();
        });

        Schema::create('countries_regions_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_region_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('locale')->index();

            $table->unique(['country_region_id', 'locale']);
            $table->unique(['slug', 'locale']);
            $table->foreign('country_region_id')->references('id')->on('countries_regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries_regions_translations');
        Schema::dropIfExists('countries_regions');
    }
}
