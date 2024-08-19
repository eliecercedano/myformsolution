<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI130Part5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i130_part5', function (Blueprint $table) {
            $table->id();
            $table->string('benef_family_four_last_name')->nullable();
            $table->string('benef_family_four_first_name')->nullable();
            $table->string('benef_family_four_middle_name')->nullable();
            $table->string('benef_family_four_relationship')->nullable();
            $table->date('benef_family_four_date_of_birth')->nullable();
            $table->string('benef_family_four_country_of_birth')->nullable();
            $table->string('benef_family_five_last_name')->nullable();
            $table->string('benef_family_five_first_name')->nullable();
            $table->string('benef_family_five_middle_name')->nullable();
            $table->string('benef_family_five_relationship')->nullable();
            $table->date('benef_family_five_date_of_birth')->nullable();
            $table->string('benef_family_five_country_of_birth')->nullable();
            $table->string('benef_ever_us')->nullable();
            $table->string('benef_class_admission')->nullable();
            $table->string('benef_form_i94_number')->nullable();
            $table->string('benef_date_arrival')->nullable();
            $table->string('benef_date_expire')->nullable();
            $table->string('benef_passport_number')->nullable();
            $table->string('benef_travel_doc_number')->nullable();
            $table->string('benef_country_issuance_passport')->nullable();
            $table->string('benef_expiration_passport')->nullable();
            $table->string('benef_employment_name_current_employer')->nullable();
            $table->string('benef_employment_street_number')->nullable();
            $table->string('benef_employment_apt_ste_flr')->nullable();
            $table->string('benef_employment_apt_ste_flr_desc')->nullable();
            $table->string('benef_employment_city_town')->nullable();
            $table->string('benef_employment_state')->nullable();
            $table->string('benef_employment_zip_code')->nullable();
            $table->string('benef_employment_province')->nullable();
            $table->string('benef_employment_postal_code')->nullable();
            $table->string('benef_employment_country')->nullable();
            $table->date('benef_employment_date_began')->nullable();
            $table->string('benef_other_inmigration_proceed')->nullable();
            $table->string('benef_type_proceed')->nullable();
            $table->string('benef_proceed_city_town')->nullable();
            $table->string('benef_proceed_state')->nullable();
            $table->date('benef_proceed_date')->nullable();
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
        Schema::table('i130_part5', function (Blueprint $table) {
            $table->dropForeign(['id_part_1']);
        });
        Schema::dropIfExists('i130_part5');
    }
}
