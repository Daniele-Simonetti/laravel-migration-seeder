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
            $table->string('stazione_di_partenza', 250);
            $table->string('stazione_di_arrivo', 250);
            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
            $table->integer('codice_treno');
            $table->integer('numero_carrozze');
            $table->tinyInteger('in_orario');
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
