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
        Schema::create('q_b_s', function (Blueprint $table) {
            $table->string('id');
            $table->string('player');
            $table->integer('cmp');
            $table->integer('att');
            $table->float('pct');
            $table->float('yds');
            $table->integer('ya');
            $table->integer('td');
            $table->integer('int');
            $table->integer('sacks');
            $table->integer('ratt');
            $table->integer('rushyds');
            $table->integer('rtd');
            $table->float('fl');
            $table->integer('g');
            $table->float('fpts');
            $table->float('fptsg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('q_b_s');
    }
};
