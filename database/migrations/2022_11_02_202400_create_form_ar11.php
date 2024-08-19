<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormAr11 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_ar11', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('situation')->nullable();
            $table->string('specify_other')->nullable();
            $table->string('country_cityzenship')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('alien_reg_number')->nullable();
            $table->string('present_street_number')->nullable();
            $table->string('present_apt_ste_flr')->nullable();
            $table->string('present_number')->nullable();
            $table->string('present_city_town')->nullable();
            $table->string('present_state')->nullable();
            $table->string('present_zip_code')->nullable();
            $table->string('previous_street_number')->nullable();
            $table->string('previous_apt_ste_flr')->nullable();
            $table->string('previous_number')->nullable();
            $table->string('previous_city_town')->nullable();
            $table->string('previous_state')->nullable();
            $table->string('previous_zip_code')->nullable();
            $table->string('mailing_street_number')->nullable();
            $table->string('mailing_apt_ste_flr')->nullable();
            $table->string('mailing_number')->nullable();
            $table->string('mailing_city_town')->nullable();
            $table->string('mailing_state')->nullable();
            $table->string('mailing_zip_code')->nullable();
            $table->string('estado')->nullable();
            $table->date('filling_date')->nullable();
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
        Schema::table('form_ar11', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('form_ar11');
    }
}
