<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI130Part3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i130_part3', function (Blueprint $table) {
            $table->id();
            $table->string('hair_color', 30)->nullable();
            $table->string('beneficiary_alien_number', 9)->nullable();
            $table->string('beneficiary_uscis_number', 12)->nullable();
            $table->string('beneficiary_social_sec_number', 30)->nullable();
            $table->string('beneficiary_last_name', 50)->nullable();
            $table->string('beneficiary_first_name', 50)->nullable();
            $table->string('beneficiary_middle_name', 50)->nullable();
            $table->string('other_benef_last_name', 50)->nullable();
            $table->string('other_benef_first_name', 50)->nullable();
            $table->string('other_benef_middle_name', 50)->nullable();
            $table->string('beneficiary_city_town_village', 30)->nullable();
            $table->string('beneficiary_country_birth', 40)->nullable();
            $table->date('beneficiary_date_birth')->nullable();
            $table->string('beneficiary_sex', 9)->nullable();
            $table->string('beneficiary_filled_for_petition', 10)->nullable();
            $table->string('benef_phys_add_street_number', 60)->nullable();
            $table->string('benef_phys_add_apt_ste_flr', 4)->nullable();
            $table->string('benef_phys_add_apt_ste_flr_desc', 40)->nullable();
            $table->string('benef_phys_add_city_town', 30)->nullable();
            $table->string('benef_phys_add_state', 4)->nullable();
            $table->string('benef_phys_add_zip_code', 15)->nullable();
            $table->string('benef_phys_add_province', 40)->nullable();
            $table->string('benef_phys_postal_code', 15)->nullable();
            $table->string('benef_phys_country', 40)->nullable();
            $table->string('benef_other_street_number', 40)->nullable();
            $table->string('benef_other_apt_ste_flr', 4)->nullable();
            $table->string('benef_other_apt_ste_flr_desc', 40)->nullable();
            $table->string('benef_other_city_town', 40)->nullable();
            $table->string('benef_other_state', 4)->nullable();
            $table->string('benef_other_zip_code', 15)->nullable();
            $table->string('out_us_street_number', 40)->nullable();
            $table->string('out_us_apt_ste_flr', 4)->nullable();
            $table->string('out_us_apt_ste_flr_desc', 40)->nullable();
            $table->string('out_us_city_town', 40)->nullable();
            $table->string('out_us_province', 40)->nullable();
            $table->string('out_us_postal_code', 15)->nullable();
            $table->string('out_us_country', 40)->nullable();
            $table->string('out_us_tel_number', 15)->nullable();
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
        Schema::table('i130_part3', function (Blueprint $table) {
            $table->dropForeign(['id_part_1']);
        });
        Schema::dropIfExists('i130_part3');
    }
}
