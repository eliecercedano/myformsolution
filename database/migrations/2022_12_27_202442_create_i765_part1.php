<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI765Part1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i765_part1', function (Blueprint $table) {
            $table->id();
            $table->string('applying_for')->nullable();
            $table->string('legal_last_name')->nullable();
            $table->string('legal_first_name')->nullable();
            $table->string('legal_middle_name')->nullable();
            $table->string('other_last_name_two')->nullable();
            $table->string('other_first_name_two')->nullable();
            $table->string('other_middle_name_two')->nullable();
            $table->string('other_last_name_three')->nullable();
            $table->string('other_first_name_three')->nullable();
            $table->string('other_middle_name_three')->nullable();
            $table->string('other_last_name_four')->nullable();
            $table->string('other_first_name_four')->nullable();
            $table->string('other_middle_name_four')->nullable();
            $table->string('mailing_care_name')->nullable();
            $table->string('mailing_street_number')->nullable();
            $table->string('mailing_apt_ste_flr')->nullable();
            $table->string('mailing_apt_ste_flr_desc')->nullable();
            $table->string('mailing_city_town')->nullable();
            $table->string('mailing_state')->nullable();
            $table->string('mailing_zip_code')->nullable();
            $table->string('mailing_same_physical')->nullable();
            $table->string('physical_street_number')->nullable();
            $table->string('physical_apt_ste_flr')->nullable();
            $table->string('physical_apt_ste_flr_desc')->nullable();
            $table->string('physical_city_town')->nullable();
            $table->string('physical_state')->nullable();
            $table->string('physical_zip_code')->nullable();
            $table->string('other_alien_number')->nullable();
            $table->string('other_uscis_account_number')->nullable();
            $table->string('other_gender')->nullable();
            $table->string('other_marital_status')->nullable();
            $table->string('prev_filed_form_i765')->nullable();
            $table->string('ssa_issued_card_you')->nullable();
            $table->string('ssn_number')->nullable();
            $table->string('want_ssn_card')->nullable();
            $table->string('auth_disclosure')->nullable();
            $table->string('father_last_name')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('mother_last_name')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('country_one')->nullable();
            $table->string('country_two')->nullable();
            $table->string('estado',2)->nullable();
            $table->date('filingDate')->nullable();
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
        Schema::dropIfExists('i765_part1');
    }
}
