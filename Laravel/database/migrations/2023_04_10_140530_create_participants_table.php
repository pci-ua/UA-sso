<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Participant', function (Blueprint $table) {
            $table->bigInteger('Id_pers');
            $table->bigInteger('Id_event');
            $table->Integer('Consommation');
            $table->dateTime('Heure_arrive');
            $table->dateTime('Heure_depart');
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
        Schema::dropIfExists('Participant');
    }
}
