<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI130Part7 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i130_part7', function (Blueprint $table) {
            $table->id();
            $table->string('relative_two_last_name')->nullable();
            $table->string('relative_two_first_name')->nullable();
            $table->string('relative_two_middle_name')->nullable();
            $table->string('relative_two_relationship')->nullable();
            $table->string('petitioner_read_english')->nullable();
            $table->string('interpreter_read')->nullable();
            $table->string('interpreter_language')->nullable();
            $table->string('preparer_prepared')->nullable();
            $table->string('preparer_fullname')->nullable();
            $table->string('petitioner_tel_number')->nullable();
            $table->string('petitioner_mobile_number')->nullable();
            $table->string('petitioner_email')->nullable(); //Until Here Page 9
            $table->string('interpreter_last_name')->nullable();
            $table->string('interpreter_first_name')->nullable();
            $table->string('interpreter_organization_name')->nullable();
            $table->string('interpreter_street_number')->nullable();
            $table->string('interpreter_apt_ste_flr')->nullable();
            $table->string('interpreter_apt_ste_flr_desc')->nullable();
            $table->string('interpreter_city_town')->nullable();
            $table->string('interpreter_state')->nullable();
            $table->string('interpreter_zip_code')->nullable();
            $table->string('interpreter_province')->nullable();
            $table->string('interpreter_postal_code')->nullable();
            $table->string('interpreter_country')->nullable();
            $table->string('interpreter_tel_number')->nullable();
            $table->string('interpreter_mobile_number')->nullable();
            $table->string('interpreter_email')->nullable();
            $table->string('interpreter_language_certified')->nullable();
            $table->string('preparer_last_name')->nullable();
            $table->string('preparer_first_name')->nullable();
            $table->string('preparer_apt_ste_flr')->nullable();
            $table->string('preparer_apt_ste_flr_desc')->nullable();
            $table->string('preparer_city_town')->nullable();
            $table->string('preparer_state')->nullable();
            $table->string('preparer_zip_code')->nullable();
            $table->string('preparer_province')->nullable();
            $table->string('preparer_postal_code')->nullable();
            $table->string('preparer_country')->nullable();
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
        Schema::table('i130_part7', function (Blueprint $table) {
            $table->dropForeign(['id_part_1']);
        });

        Schema::dropIfExists('i130_part7');
    }
}
