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
        Schema::create('brake_and_suspensions', function (Blueprint $table) {
            $table->id();
            $table->string('abs');
            $table->string('tyre');
            $table->string('suspension');
            $table->string('brake');
            $table->string('wheel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brake_and_suspensions');
    }
};
