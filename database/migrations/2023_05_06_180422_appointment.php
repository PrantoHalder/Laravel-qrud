<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema :: create('appointments',function(Blueprint $table){
            $table-> id();
            $table-> unsignedBigInteger('user_id');
            $table-> unsignedBigInteger('doctor_details_id');
            $table-> unsignedBigInteger('schedule_id');
            $table-> boolean('is_appointed');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('doctor_details_id')->references('id')->on('doctor_details');
            $table->foreign('schedule_id')->references('id')->on('doctor_schedule');
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
