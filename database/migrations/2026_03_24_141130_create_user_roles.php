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
        Schema::create('t_UserRoles', function (Blueprint $table) {
            $table->id('Id');
            $table->unsignedBigInteger('UserId');
            $table->unsignedBigInteger('RoleId');
            $table->foreign('UserId')->references('Id')->on('t_Users')->onDelete('cascade');
            $table->foreign('RoleId')->references('Id')->on('t_Roles')->onDelete('cascade');
            $table->unique(['UserId', 'RoleId']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_UserRoles');
    }
};
