<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI130Part4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i130_part4', function (Blueprint $table) {
            $table->id();
            $table->string('out_us_mobile_number')->nullable();
            $table->string('out_us_email')->nullable();
            $table->string('benef_times_married')->nullable();
            $table->string('benef_marital_status')->nullable();
            $table->string('benef_marital_date')->nullable();
            $table->string('benef_current_marriage_city_town')->nullable();
            $table->string('benef_current_state')->nullable();
            $table->string('benef_current_province')->nullable();
            $table->string('benef_current_country')->nullable();
            $table->string('benef_spouse_one_last_name')->nullable();
            $table->string('benef_spouse_one_first_name')->nullable();
            $table->string('benef_spouse_one_middle_name')->nullable();
            $table->date('benef_spouse_one_date_marriage_ended')->nullable();
            $table->string('benef_spouse_two_last_name')->nullable();
            $table->string('benef_spouse_two_first_name')->nullable();
            $table->string('benef_spouse_two_middle_name')->nullable();
            $table->date('benef_spouse_two_date_marriage_ended')->nullable();
            $table->string('benef_family_one_last_name')->nullable();
            $table->string('benef_family_one_first_name')->nullable();
            $table->string('benef_family_one_middle_name')->nullable();
            $table->string('benef_family_one_relationship')->nullable();
            $table->date('benef_family_one_date_of_birth')->nullable();
            $table->string('benef_family_one_country_of_birth')->nullable();
            $table->string('benef_family_two_last_name')->nullable();
            $table->string('benef_family_two_first_name')->nullable();
            $table->string('benef_family_two_middle_name')->nullable();
            $table->string('benef_family_two_relationship')->nullable();
            $table->date('benef_family_two_date_of_birth')->nullable();
            $table->string('benef_family_two_country_of_birth')->nullable();
            $table->string('benef_family_three_last_name')->nullable();
            $table->string('benef_family_three_first_name')->nullable();
            $table->string('benef_family_three_middle_name')->nullable();
            $table->string('benef_family_three_relationship')->nullable();
            $table->date('benef_family_three_date_of_birth')->nullable();
            $table->string('benef_family_three_country_of_birth')->nullable();
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
        Schema::table('i130_part4', function (Blueprint $table) {
            $table->dropForeign(['id_part_1']);
        });

        Schema::dropIfExists('i130_part4');
    }
}
