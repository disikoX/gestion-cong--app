<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id('id_employe');
            $table->string('prenom', 50);
            $table->string('nom', 50);
            $table->string('email', 100);
            $table->date('date_embauche');
            $table->unsignedBigInteger('id_departement');
            $table->unsignedBigInteger('id_role');
            $table->integer('jours_conge_restants');
            $table->timestamps();

            $table->foreign('id_departement')->references('id_departement')->on('departements');
            $table->foreign('id_role')->references('id_role')->on('roles');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employes');
    }
};

