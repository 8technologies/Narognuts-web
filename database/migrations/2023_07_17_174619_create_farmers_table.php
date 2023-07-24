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
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('email');
            $table->date('dob');
            $table->integer('phonenumber')->max(10);
            $table->enum('sex',['male','female']);
            $table->string('subcounty');
            $table->string('parish');
            $table->string('village');
            $table->string('farmersassociation');
            $table->integer('experience')->default(0);
            $table->integer('scale')->default(0);
            $table->integer('dependants')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmers');
    }
};
