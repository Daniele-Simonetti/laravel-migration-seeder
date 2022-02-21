<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 150);
            $table->string('stazione di partenza', 250);
            $table->string('stazione di arrivo', 250);
            $table->dateTime('Orario di partenza');
            $table->dateTime('Orario di arrivo');
            $table->integer('codice treno');
            $table->integer('numero carrozze');
            $table->tinyInteger('in orario');
            $table->tinyInteger('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
