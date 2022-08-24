<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_request',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->integer('phone_no');
            $table->string('IC');
            $table->string('quotation_type');
            $table->string('remark')->nullable();
            $table->string('other_information')->nullable();
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
        Schema::dropIfExists('quotation_request');
    }
};
