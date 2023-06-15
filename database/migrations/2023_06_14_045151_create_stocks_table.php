<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('obat_id');
            $table->foreignId('user_id');
            $table->dateTime('time_start_fill');
            $table->dateTime('time_end_fill');
            $table->text('purpose');
            $table->dateTime('addStock_start');
            $table->dateTime('addStock_end')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
};
