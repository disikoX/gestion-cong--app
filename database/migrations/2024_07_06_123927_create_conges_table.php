<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongesTable extends Migration
{
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->id('id_conge');
            $table->unsignedBigInteger('id_employe');
            $table->unsignedBigInteger('id_type_conge');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('statut', 50);
            $table->date('date_demande');
            $table->date('date_approbation')->nullable();
            $table->timestamps();

            $table->foreign('id_employe')->references('id_employe')->on('employes');
            $table->foreign('id_type_conge')->references('id_type_conge')->on('types_conges');
        });
    }

    public function down()
    {
        Schema::dropIfExists('conges');
    }
};
