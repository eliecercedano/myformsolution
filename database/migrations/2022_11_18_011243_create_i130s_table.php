<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI130sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i130s', function (Blueprint $table) {
            $table->id();
            $table->string('petition', 20)->nullable();
            $table->string('petition_child_parent', 20)->nullable();
            $table->string('brother_sister', 10)->nullable();
            $table->string('adoption_status_citizenship', 10)->nullable();
            $table->string('a_number', 9)->nullable();
            $table->string('uscis_account_number', 12)->nullable();
            $table->string('us_social_security_number', 9)->nullable();
            $table->string('user_last_name', 40)->nullable();
            $table->string('user_first_name', 40)->nullable();
            $table->string('user_middle_name', 40)->nullable(); //until here, page 1
            $table->string('user_other_last_name', 40)->nullable();
            $table->string('user_other_first_name', 40)->nullable();
            $table->string('user_other_middle_name', 40)->nullable();
            $table->string('city_town_village_birth', 30)->nullable();
            $table->string('country_birth', 20)->nullable();
            $table->date('date_birth')->nullable();
            $table->string('sex', 7)->nullable();
            $table->string('mailing_care_of_name', 50)->nullable();
            $table->string('mailing_street_number', 100)->nullable();
            $table->string('mailing_apt_ste_flr', 3)->nullable();
            $table->string('mailing_apt_ste_flr_description', 50)->nullable();
            $table->string('mailing_city_town', 20)->nullable();
            $table->string('mailing_state', 3)->nullable();
            $table->string('mailing_zip_code', 15)->nullable();
            $table->string('mailing_province', 30)->nullable();
            $table->string('mailing_postal_code', 15)->nullable();
            $table->string('mailing_country', 30)->nullable();
            $table->string('mailing_address_same_physical', 4)->nullable();
            $table->string('physical_add_one_street_number', 100)->nullable();
            $table->string('physical_add_one_apt_ste_flr', 3)->nullable();
            $table->string('physical_add_one_apt_ste_flr_desc', 50)->nullable();
            $table->string('physical_add_one_city_town', 20)->nullable();
            $table->string('physical_add_one_state', 3)->nullable();
            $table->string('physical_add_one_zip_code', 15)->nullable();
            $table->string('physical_add_one_province', 30)->nullable();
            $table->string('physical_add_one_postal_code', 15)->nullable();
            $table->string('physical_add_one_country', 30)->nullable();
            $table->date('physical_add_one_from_date')->nullable();
            $table->string('physical_add_two_street_number', 100)->nullable();
            $table->string('physical_add_two_apt_ste_flr', 4)->nullable();
            $table->string('physical_add_two_apt_ste_flr_desc', 50)->nullable();
            $table->string('physical_add_two_city_town', 20)->nullable();
            $table->string('physical_add_two_state', 3)->nullable();
            $table->string('physical_add_two_zip_code', 15)->nullable();
            $table->string('physical_add_two_province', 30)->nullable();
            $table->string('physical_add_two_postal_code', 15)->nullable();
            $table->string('physical_add_two_country', 30)->nullable();
            $table->date('physical_add_two_from_date')->nullable();
            $table->date('physical_add_two_to_date')->nullable();
            $table->string('times_married', 2)->nullable();
            $table->string('current_marital_status', 20)->nullable(); // Until here, page 2 
            $table->date('date_current_marriage')->nullable();
            $table->string('marriage_current_city_town', 30)->nullable();
            $table->string('marriage_current_state', 3)->nullable();
            $table->string('marriage_current_province', 30)->nullable();
            $table->string('marriage_current_country', 30)->nullable();
            $table->string('spouse_one_last_name', 40)->nullable();
            $table->string('spouse_one_first_name', 40)->nullable();
            $table->string('spouse_one_middle_name', 40)->nullable();
            $table->date('spouse_one_date_marriage_ended')->nullable();
            $table->string('spouse_two_last_name', 40)->nullable();
            $table->string('spouse_two_first_name', 40)->nullable();
            $table->string('spouse_two_middle_name', 40)->nullable();
            $table->date('spouse_two_date_marriage_ended')->nullable();
            $table->string('parent_one_last_name', 40)->nullable();
            $table->string('parent_one_first_name', 40)->nullable();
            $table->string('parent_one_middle_name', 40)->nullable();
            $table->date('parent_one_date_birth')->nullable();
            $table->string('parent_one_sex', 7)->nullable(); 
            $table->string('parent_one_country_birth', 30)->nullable();
            $table->string('parent_one_city_town_village', 30)->nullable();
            $table->string('parent_one_country_residence', 30)->nullable();
            $table->string('parent_two_last_name', 40)->nullable();
            $table->string('parent_two_first_name', 40)->nullable();
            $table->string('parent_two_middle_name', 40)->nullable();
            $table->date('parent_two_date_birth')->nullable();
            $table->string('parent_two_sex', 7)->nullable();
            $table->string('parent_two_country_birth', 30)->nullable();
            $table->string('parent_two_city_town_village', 30)->nullable();
            $table->string('parent_two_country_residence', 30)->nullable();
            $table->string('citizen_permanent', 15)->nullable();
            $table->string('citizenship_acquired', 25)->nullable();
            $table->string('certificates', 4)->nullable();
            $table->string('certificate_number', 20)->nullable();
            $table->string('place_issuance', 20)->nullable();
            $table->date('date_issuance')->nullable(); //until here page 3
            $table->string('estado', 2)->nullable();
            $table->date('filingDate');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('i130s');
    }
}
