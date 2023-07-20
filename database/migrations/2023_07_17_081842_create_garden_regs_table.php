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
        Schema::create('garden_regs', function (Blueprint $table) {
            $table->id();
            $table->string('GardenName');
            $table->string('GardenSize');
            $table->string('PlatingDate');
            $table->string('varietyPlanted');
            $table->string('SeedClass');
            $table->string('seedBoughtFrom');
            $table->string('OwnershipOfLand');
            $table->string('NameOfSeller');
            $table->string('SellerLocation');
            $table->string('SellerContactNumber');
            $table->string('PurposeOfPlanting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garden_regs');
    }
};
