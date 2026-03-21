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
        //
         Schema::create('t_Users', function (Blueprint $table) {
            $table->id('Id');
            $table->string('UserId')->unique();
            $table->text('Name');
            $table->text('Email');
            $table->longText('Password');
            $table->longText('Phone');
            $table->longText('Address');
            $table->string('RememberToken')->nullable();        
            $table->boolean('IsActive')->default(true);
            $table->timestamp('CreatedAt')->nullable();
            $table->timestamp('UpdatedAt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('t_Users');
    }
};
