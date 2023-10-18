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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->smallInteger('rooms')->unsigned();
            $table->smallInteger('beds')->unsigned();
            $table->smallInteger('bathrooms')->unsigned();
            $table->smallInteger('mq')->unsigned();
            $table->string('address');
            $table->decimal('lat',11,8);
            $table->decimal('lon',11,8);
            $table->string('photo');
            $table->tinyInteger('visible');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};