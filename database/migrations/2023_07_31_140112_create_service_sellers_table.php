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
        Schema::create('service_sellers', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Type');
            $table->string('offerType');
            $table->string('conditions');
            $table->string('Price_Per_Unit');
            $table->string('PaymentMode');
            $table->mediumText('Remarks');
            $table->mediumText('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_sellers');
    }
};
