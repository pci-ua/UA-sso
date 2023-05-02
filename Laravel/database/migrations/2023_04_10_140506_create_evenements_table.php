<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evenement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom');
            $table->string('Description');
            $table->dateTime('Date', 0);
            $table->string('Lieu');
            $table->bigInteger('nb_max');
            $table->string('Nom_assoc');
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
        Schema::dropIfExists('Evenement');
    }
}
