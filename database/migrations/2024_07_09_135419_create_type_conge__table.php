<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        if(!Schema::hasTable('types_conges')) {

        Schema::create('types_conges', function (Blueprint $table) {
            $table->id('id_type_conge');
            $table->string('nom_type_conge', 100);
            $table->integer('jours_alloues');
            $table->timestamps();
        });

        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types_conges_');
    }
};
