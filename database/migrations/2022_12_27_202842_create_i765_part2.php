<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI765Part2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i765_part2', function (Blueprint $table) {
            $table->id();
            $table->string('birth_city_town_village')->nullable();
            $table->string('birth_state')->nullable();
            $table->string('birth_country')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('arrival_record_number')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('travel_doc_number')->nullable();
            $table->string('country_issued_passport')->nullable();
            $table->string('expiration_date_passport')->nullable();
            $table->string('date_last_arrival_us')->nullable();
            $table->string('place_last_arrival')->nullable();
            $table->string('inmigration_status_arrival_us_last')->nullable();
            $table->string('current_inmigration_status')->nullable();
            $table->string('sevis_number')->nullable();
            $table->string('category_0')->nullable();
            $table->string('category_1')->nullable();
            $table->string('category_2')->nullable();
            $table->string('degree')->nullable();
            $table->string('employer_name_e_verify')->nullable();
            $table->string('employer_company_id_e_verify')->nullable();
            $table->string('receipt_number_h1b')->nullable();
            $table->string('ever_been_arrested_one')->nullable();
            $table->string('receipt_number_i797')->nullable();
            $table->string('ever_been_arrested_two')->nullable();
            $table->string('can_read_understand_english')->nullable();
            $table->string('interpreter_language')->nullable();
            $table->string('preparer_prepared')->nullable();
            $table->string('preparer_name')->nullable();
            $table->string('applicant_daytime_number')->nullable();
            $table->string('applicant_phone_number')->nullable();
            $table->string('applicant_email')->nullable();
            $table->string('salvadorian_guatemalan')->nullable();
            $table->unsignedBigInteger('idPart1');
            $table->foreign('idPart1')->references('id')->on('i765_part1')->onDelete('cascade');
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
        Schema::table('i765_part2', function (Blueprint $table){
            $table->dropForeign(['idPart1']);
        });
        Schema::dropIfExists('i765_part2');
    }
}
