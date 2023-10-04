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
        Schema::create('datalogs', function (Blueprint $table) {
            $table->dateTime('Timestamp');
            $table->string('TZ');
            $table->integer('PWR12V_State');
            $table->decimal('VNotch_2_mA', 11, 7);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datalogs');
    }
};
