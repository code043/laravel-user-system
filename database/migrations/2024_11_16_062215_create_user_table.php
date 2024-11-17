<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();            
            $table->string('name');
            $table->string('username')->unique();
            $table->string('role')->default('user');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->date('birth_date');
            $table->timestamps();
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
