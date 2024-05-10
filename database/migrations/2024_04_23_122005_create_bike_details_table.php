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
        Schema::create('bike_details', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->float('price');
            $table->string('variant');
            $table->string('category');
            $table->string('engine_type')->nullable();
            $table->float('displacement')->nullable();
            $table->string('cooling_system')->nullable();
            $table->integer('top_speed');
            $table->string('clutch_type')->nullable();
            $table->string('start_type');
            $table->string('fuel_type')->nullable();
            $table->string('emission_type')->nullable();
            $table->string('fuel_supply')->nullable();
            $table->float('max_torque');
            $table->float('mileage')->nullable();
            $table->integer('gears')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bike_details');
    }
};
