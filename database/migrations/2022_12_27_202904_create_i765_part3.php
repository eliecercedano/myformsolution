<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI765Part3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i765_part3', function (Blueprint $table) {
            $table->id();
            $table->string('interpreter_last_name')->nullable();
            $table->string('interpreter_first_name')->nullable();
            $table->string('interpreter_organization_name')->nullable();
            $table->string('interpreter_mailing_street_number')->nullable();
            $table->string('interpreter_mailing_apt_ste_flr')->nullable();
            $table->string('interpreter_mailing_city_town')->nullable();
            $table->string('interpreter_mailing_state')->nullable();
            $table->string('interpreter_mailing_zip_code')->nullable();
            $table->string('interpreter_mailing_province')->nullable();
            $table->string('interpreter_mailing_postal_code')->nullable();
            $table->string('interpreter_mailing_country')->nullable();
            $table->string('interpreter_daytime_number')->nullable();
            $table->string('interpreter_mobile_number')->nullable();
            $table->string('interpreter_email')->nullable();
            $table->string('interpreter_cert_language')->nullable();
            $table->string('preparer_last_name')->nullable();
            $table->string('preparer_first_name')->nullable();
            $table->string('preparer_organization_name')->nullable();
            $table->string('preparer_mailing_street_number')->nullable();
            $table->string('preparer_mailing_apt_ste_flr')->nullable();
            $table->string('preparer_mailing_city_town')->nullable();
            $table->string('preparer_mailing_state')->nullable();
            $table->string('preparer_mailing_zip_code')->nullable();
            $table->string('preparer_mailing_province')->nullable();
            $table->string('preparer_mailing_postal_code')->nullable();
            $table->string('preparer_mailing_country')->nullable();
            $table->string('preparer_daytime_number')->nullable();
            $table->string('preparer_mobile_number')->nullable();
            $table->string('preparer_email')->nullable();
            $table->string('not_attorney_accredited')->nullable();
            $table->string('attorney_accredited')->nullable();
            $table->string('extends')->nullable();
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
        Schema::table('i765_part3', function (Blueprint $table){
            $table->dropForeign(['idPart1']);
        });
        Schema::dropIfExists('i765_part3');
    }
}
