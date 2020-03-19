<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('code')->nullable();
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('password');
            $table->string('password_description')->nullable();
            $table->date('dob')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('identification_mark')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->string('profile_path')->nullable();
            $table->string('present_address_1')->nullable();
            $table->string('present_address_2')->nullable();
            $table->string('present_address_landmark')->nullable();
            $table->string('present_ps')->nullable();
            $table->string('present_po')->nullable();
            $table->string('present_city')->nullable();
            $table->string('present_district')->nullable();
            $table->string('present_state')->nullable();
            $table->string('present_pin')->nullable();
            $table->string('permanent_address_1')->nullable();
            $table->string('permanent_address_2')->nullable();
            $table->string('permanent_address_landmark')->nullable();
            $table->string('permanent_ps')->nullable();
            $table->string('permanent_po')->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('permanent_district')->nullable();
            $table->string('permanent_state')->nullable();
            $table->string('permanent_pin')->nullable();
            $table->string('home_town_city')->nullable();
            $table->string('home_town_district')->nullable();
            $table->string('home_town_state')->nullable();
            $table->string('home_town_pin')->nullable();
            $table->string('appointment_type')->nullable();
            $table->integer('designation_id')->nullable();
            $table->integer('payband')->nullable();
            $table->integer('grade')->nullable();
            $table->string('bank_ac_no')->nullable();
            $table->string('bank_ifsc_no')->nullable();
            $table->string('pf_no')->nullable();
            $table->string('esic_no')->nullable();
            $table->string('creator');
            $table->integer('creator_id');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
