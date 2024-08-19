<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI130Part6 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i130_part6', function (Blueprint $table) {
            $table->id();
            $table->string('spouse_street_number')->nullable();
            $table->string('spouse_apt_ste_flr')->nullable();
            $table->string('spouse_apt_ste_flr_desc')->nullable();
            $table->string('spouse_city_town')->nullable();
            $table->string('spouse_state')->nullable();
            $table->string('spouse_zip_code')->nullable();
            $table->string('spouse_province')->nullable();
            $table->string('spouse_postal_code')->nullable();
            $table->string('spouse_country')->nullable();
            $table->date('spouse_date_from')->nullable();
            $table->date('spouse_date_to')->nullable();
            $table->string('benef_us_adjust_city_town')->nullable();
            $table->string('benef_us_adjust_state')->nullable();
            $table->string('benef_us_visa_city_town')->nullable();
            $table->string('benef_us_visa_province')->nullable();
            $table->string('benef_us_visa_country')->nullable();
            $table->string('other_benef_alien_filled')->nullable();
            $table->string('previous_benef_alien_last_name')->nullable();
            $table->string('previous_benef_alien_first_name')->nullable();
            $table->string('previous_benef_alien_middle_name')->nullable();
            $table->string('previous_benef_alien_city_town')->nullable();
            $table->string('previous_benef_alien_state')->nullable();
            $table->date('previous_benef_alien_date_filed')->nullable();
            $table->string('previous_benef_alien_result')->nullable();
            $table->string('relative_one_last_name')->nullable();
            $table->string('relative_one_first_name')->nullable();
            $table->string('relative_one_middle_name')->nullable();
            $table->string('relative_one_relationship')->nullable();
            $table->unsignedBigInteger('id_part_1');
            $table->foreign('id_part_1')->references('id')->on('i130s')->onDelete('cascade');
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
        Schema::table('i130_part6', function (Blueprint $table) {
            $table->dropForeign(['id_part_1']);
        });

        Schema::dropIfExists('i130_part6');
    }
}
