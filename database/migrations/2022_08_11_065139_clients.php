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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('IC');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('date_of_birth');
            $table->integer('mobile_no');
            $table->string('address');
            $table->string('address_2');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->string('policy_status')->unsigned()->nullable();
            $table->string('investment_status')->unsigned()->nullable();
            $table->string('will_content')->unsigned()->nullable();
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
        Schema::dropIfExists('clients');
    }
};
