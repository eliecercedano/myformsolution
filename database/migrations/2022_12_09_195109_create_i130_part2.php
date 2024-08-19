<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI130Part2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i130_part2', function (Blueprint $table) {
            $table->id();
            $table->string('class_admission', 20)->nullable();
            $table->date('date_of_admission')->nullable();
            $table->string('admission_city_town', 30)->nullable();
            $table->string('admission_state', 4)->nullable();
            $table->string('gain_through_marriage', 4)->nullable();
            $table->string('currently_working', 4)->nullable();
            $table->string('employer_one_name_company', 50)->nullable();
            $table->string('employer_one_street_number', 50)->nullable();
            $table->string('employer_one_apt_ste_flr', 4)->nullable();
            $table->string('employer_one_apt_ste_flr_desc', 40)->nullable();
            $table->string('employer_one_city_town', 30)->nullable();
            $table->string('employer_one_state', 4)->nullable();
            $table->string('employer_one_zip_code', 15)->nullable();
            $table->string('employer_one_province', 30)->nullable();
            $table->string('employer_one_postal_code', 15)->nullable();
            $table->string('employer_one_country', 30)->nullable();
            $table->string('employer_one_occupation', 30)->nullable();
            $table->date('employer_one_date_from')->nullable();
            $table->string('employer_two_name_company', 30)->nullable();
            $table->string('employer_two_street_number', 30)->nullable();
            $table->string('employer_two_apt_ste_flr', 4)->nullable();
            $table->string('employer_two_apt_ste_flr_desc', 40)->nullable();
            $table->string('employer_two_city_town', 30)->nullable();
            $table->string('employer_two_state', 4)->nullable();
            $table->string('employer_two_zip_code', 15)->nullable();
            $table->string('employer_two_province', 30)->nullable();
            $table->string('employer_two_postal_code', 15)->nullable();
            $table->string('employer_two_country', 30)->nullable();
            $table->string('employer_two_occupation', 30)->nullable();
            $table->date('employer_two_date_from')->nullable();
            $table->date('employer_two_date_to')->nullable();
            $table->string('ethnicity', 15)->nullable();
            $table->string('race_white', 15)->nullable();
            $table->string('race_asian', 15)->nullable();
            $table->string('race_black', 15)->nullable();
            $table->string('race_indian_alaska', 15)->nullable();
            $table->string('race_hawaiian_islander', 15)->nullable();
            $table->string('height_feet', 2)->nullable();
            $table->string('height_inches', 2)->nullable();
            $table->string('weight_pounds_0', 3)->nullable();
            $table->string('weight_pounds_1', 3)->nullable();
            $table->string('weight_pounds_2', 3)->nullable();
            $table->string('eye_color', 15)->nullable(); // until here page 4
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
        Schema::table('i130_part2', function (Blueprint $table) {
            $table->dropForeign(['id_part_1']);
        });
        Schema::dropIfExists('i130_part2');
    }
}
