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
        Schema::create('track_histories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->enum('type', ['Start', 'End']);
            $table->string('time', 30);
            $table->date('date');
            $table->text('memo')->nullable();
            $table->text('agency')->nullable();
            $table->string('ip_address', 255)->nullable();
            $table->string('browser', 255)->nullable();
            $table->string('device', 255)->nullable();
            $table->string('platform', 255)->nullable();
            $table->string('location', 255)->nullable();
            $table->tinyInteger('isDesktop')->default(1);
            $table->tinyInteger('isPhone')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('track_histories');
    }
};
