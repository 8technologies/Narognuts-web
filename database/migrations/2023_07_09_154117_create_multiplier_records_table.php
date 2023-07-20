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
        Schema::create('multiplier_records', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('LastName');
            $table->string('Sex');
            $table->string('PhoneNumber');
            $table->string('EnterpriseName');
            $table->string('DistrictOfOperation');
            $table->string('DateOfRegistration');
            $table->string('RegistrationNumber');
            $table->string('SectorOfSpecialisation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiplier_records');
    }
};
