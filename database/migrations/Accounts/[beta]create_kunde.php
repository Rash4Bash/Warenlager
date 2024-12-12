<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateMarkt_Table extends Migration
{
    public function up()
    {
        Schema::create('Kunde', function (Blueprint $table) {
            $table->id('KundeID');
            $table->string('Kundenummer', 20)->unique();
            $table->unsignedBigInteger('ReservierungsID')->nullable();
            $table->string('Leitung', 100)->nullable();
            $table->string('Bundesland', 50)->nullable();
            $table->string('postleizahl', 10)->nullable();
            $table->text('res_Produkte')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('Kunde');
    }
}