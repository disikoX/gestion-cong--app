<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesCongesTable extends Migration
{
    public function up()
    {
        Schema::create('types_conges', function (Blueprint $table) {
            $table->id('id_type_conge');
            $table->string('nom_type_conge', 100);
            $table->integer('jours_alloues');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('types_conges');
    }
};

