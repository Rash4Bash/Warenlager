<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('usb_kabel', function (Blueprint $table) {
          $table->id();
          $table->integer('a_nr')->nullable();
          $table->string('bezeichnung');
          $table->string('merkmal')->nullable();
          $table->integer('anzahl')->default(0);
          $table->timestamps();
        });
    }
    public function down(): void {
     Schema::dropIfExists('usb_kabel');
    }};

