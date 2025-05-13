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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('email');
            $table->timestamps();

            $table->unsignedBigInteger('area_id')->nullable();
            $table->unsignedBigInteger('training_center_id')->nullable();

            $table->foreign('area_id')
                ->references('id')
                ->on('areas')->onDelete('set null');

            $table->foreign('training_center_id')
            ->references('id')
            ->on('training_centers')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
