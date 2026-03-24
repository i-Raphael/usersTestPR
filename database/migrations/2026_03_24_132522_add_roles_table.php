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
        Schema::create('t_Roles', function (Blueprint $table) {
            $table->id('Id');
            $table->string('RoleName')->unique();
            $table->string('GuardName')->unique();
            $table->text('Description');
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
        Schema::dropIfExists('t_Roles');
    }
};
