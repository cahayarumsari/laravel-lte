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
        Schema::create('perans', function (Blueprint $table) {
            $table->id();
            $table->foreignID("film_id")->constrained();
            $table->foreignID("cast_id")->constrained();
            $table->string("nama", 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perans');
    }
};
