<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnI765Part3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('i765_part3', function (Blueprint $table){
            $table->string('interpreter_mailing_apt_ste_flr_desc')->nullable();
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
            $table->dropColumn('interpreter_mailing_apt_ste_flr_desc');
        });
    }
}
