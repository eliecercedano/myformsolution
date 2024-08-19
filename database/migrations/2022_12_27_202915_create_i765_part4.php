<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateI765Part4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i765_part4', function (Blueprint $table) {
            $table->id();
            $table->string('extra_last_name')->nullable();
            $table->string('extra_first_name')->nullable();
            $table->string('extra_middle_name')->nullable();
            $table->string('extra_alien_number')->nullable();
            $table->string('extra_page_number_one')->nullable();
            $table->string('extra_part_number_one')->nullable();
            $table->string('extra_item_number_one')->nullable();
            $table->text('extra_desc_one')->nullable();
            $table->string('extra_page_number_two')->nullable();
            $table->string('extra_part_number_two')->nullable();
            $table->string('extra_item_number_two')->nullable();
            $table->text('extra_desc_two')->nullable();
            $table->string('extra_page_number_three')->nullable();
            $table->string('extra_part_number_three')->nullable();
            $table->string('extra_item_number_three')->nullable();
            $table->text('extra_desc_three')->nullable();
            $table->string('extra_page_number_four')->nullable();
            $table->string('extra_part_number_four')->nullable();
            $table->string('extra_item_number_four')->nullable();
            $table->text('extra_desc_four')->nullable();
            $table->string('extra_page_number_five')->nullable();
            $table->string('extra_part_number_five')->nullable();
            $table->string('extra_item_number_five')->nullable();
            $table->text('extra_desc_five')->nullable();
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
        Schema::table('i765_part4', function (Blueprint $table){
            $table->dropForeign(['idPart1']);
        });
        Schema::dropIfExists('i765_part4');
    }
}
