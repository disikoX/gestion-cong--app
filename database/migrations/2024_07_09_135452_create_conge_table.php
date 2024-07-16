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
        if(!Schema::hasTable('conges')){
           
            Schema::create('conges', function (Blueprint $table) {
                $table->id('id_conge');
                $table->unsignedBigInteger('id_employe');
                $table->unsignedBigInteger('id_type_conge');
                $table->date('date_debut');
                $table->date('date_fin');
                $table->string('statut', 50);
                $table->date('date_demande');
                $table->date('date_approbation')->nullable();
    
                $table->foreign('id_employe')->references('id_employe')->on('employes')->onDelete('cascade');
                $table->foreign('id_type_conge')->references('id_type_conge')->on('types_conges')->onDelete('cascade');
            });
        }
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('conge',function($table) {
            $table->dropForeign(['id_employe']);
            $table->dropColumn(['id_employe']);
            $table->dropForeign(['id_type_conge']);
            $table->dropColumn(['id_type_conge']);
         });


        Schema::dropIfExists('conge');
    }
};
