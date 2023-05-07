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
        Schema :: create('doctor_schedule',function(Blueprint $table){
            $table-> id();
            $table-> unsignedBigInteger('doctor_detail_id');
            $table->timestamp('start_at');
            $table->timestamp('end_at');
            $table->json('workdays');
            $table->string('address');
            $table->string('phone');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('doctor_detail_id')->references('id')->on('doctor_details');
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema :: dropIfExists('doctor_schedule');
    }
};
