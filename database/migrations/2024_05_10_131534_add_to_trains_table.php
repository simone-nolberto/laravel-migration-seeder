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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda', 30);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->integer('train_code', false, false);
            $table->integer('coach_number', false, false)->nullable();
            $table->boolean('in_time')->default(1);
            $table->boolean('deleted')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn(['azienda', 'departure_station', 'arrival_station', 'departure_time', 'arrival_time', 'train_code', 'coach_number', 'in_time', 'deleted']);
        });
    }
};
