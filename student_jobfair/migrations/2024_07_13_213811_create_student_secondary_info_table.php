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
        Schema::create('student_secondary_info', function (Blueprint $table) {
            $table->id();
            $table->string("firstname",'30');
            $table->string('lastname','30');
            $table->string('course');
            $table->float('hscpercentage');
            $table->bigInteger('aadhar_no')->unique();
            $table->string('fathername');
            $table->string('mothername');
            $table->bigInteger('fatherphone');
            $table->bigInteger('motherphone');
            $table->string('address');
            $table->bigInteger('account_no');
            $table->string('bankname');
            $table->bigInteger('ifsc_code');
            $table->foreign('stud_id')->references('id')->on('student_primary_info')->onDelete('cascade');
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
        Schema::dropIfExists('student_secondary_info');
    }
};
