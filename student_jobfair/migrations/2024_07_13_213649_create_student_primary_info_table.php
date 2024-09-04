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
        Schema::create('student_primary_info', function (Blueprint $table) {
            $table->id();
            $table->string("firstname","30");
            $table->string("gender","30");
            $table->string("email","30")->unique();
            $table->string("phone","30");
            $table->date("dob","30");
            $table->string("department","30");

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
        Schema::dropIfExists('student_primary_info');
    }
};
