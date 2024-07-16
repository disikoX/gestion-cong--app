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

        if(!Schema::hasTable('utilisateurs')){

            Schema::create('utilisateurs', function (Blueprint $table) {
                $table->id('id_utilisateur');
                $table->string('code_employe', 20)->unique();
                $table->string('nom', 50);
                $table->string('prenom', 50);
                $table->string('mot_de_passe');
            });
        }


        
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
