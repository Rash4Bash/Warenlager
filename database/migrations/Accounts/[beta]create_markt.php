<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateMarkt_Table extends Migration
{
    public function up()
    {
        Schema::create('markt', function (Blueprint $table) {
            $table->id('MarktID');
            $table->string('marktnummer', 20)->unique();
            $table->unsignedBigInteger('ReservierungsID')->nullable();
            $table->string('marktleitung', 100)->nullable();
            $table->string('Bundesland', 50)->nullable();
            $table->string('postleizahl', 10)->nullable();
            $table->text('res_Produkte')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('markt');
    }
}