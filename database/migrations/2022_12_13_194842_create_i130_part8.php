<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI130Part8 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i130_part8', function (Blueprint $table) {
            $table->id();
            $table->string('preparer_tel_number')->nullable();
            $table->string('preparer_mobile_number')->nullable();
            $table->string('preparer_email_number')->nullable();
            $table->string('preparer_statement_1')->nullable();
            $table->string('preparer_statement_2')->nullable();
            $table->string('extends')->nullable();
            $table->string('extra_info_last_name')->nullable();
            $table->string('extra_info_first_name')->nullable();
            $table->string('extra_info_middle_name')->nullable();
            $table->string('extra_info_a_number')->nullable();
            $table->string('extra_info_page_number_1')->nullable();
            $table->string('extra_info_part_number_1')->nullable();
            $table->string('extra_info_item_number_1')->nullable();
            $table->text('extra_info_desc_1')->nullable();
            $table->string('extra_info_page_number_2')->nullable();
            $table->string('extra_info_part_number_2')->nullable();
            $table->string('extra_info_item_number_2')->nullable();
            $table->text('extra_info_desc_2')->nullable();
            $table->string('extra_info_page_number_3')->nullable();
            $table->string('extra_info_part_number_3')->nullable();
            $table->string('extra_info_item_number_3')->nullable();
            $table->text('extra_info_desc_3')->nullable();
            $table->string('extra_info_page_number_4')->nullable();
            $table->string('extra_info_part_number_4')->nullable();
            $table->string('extra_info_item_number_4')->nullable();
            $table->text('extra_info_desc_4')->nullable();
            $table->string('extra_info_page_number_5')->nullable();
            $table->string('extra_info_part_number_5')->nullable();
            $table->string('extra_info_item_number_5')->nullable();
            $table->text('extra_info_desc_5')->nullable();
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
        Schema::table('i130_part8', function (Blueprint $table) {
            $table->dropForeign(['id_part_1']);
        });
        Schema::dropIfExists('i130_part8');
    }
}
