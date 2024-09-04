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
        Schema::table('student_secondary_info', function (Blueprint $table) {
            // $table->foreign('stud_id')->references('id')->on('student_primary_info')

            $table->unsignedBigInteger('stud_id')->change();
            $table->foreign('stud_id')->references('id')->on('student_primary_info')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_secondary_info', function (Blueprint $table) {
            
        });
    }
};
