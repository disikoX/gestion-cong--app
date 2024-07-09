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
       if(!Schema::hasTable('employes')) {
        Schema::create('employes', function (Blueprint $table) {
            $table->id('id_employe');
            $table->string('prenom', 50);
            $table->string('nom', 50);
            $table->string('email', 100)->unique();
            $table->date('date_embauche');
            $table->unsignedBigInteger('id_departement');
            $table->unsignedBigInteger('id_role');
            $table->integer('jours_conge_restants');
            $table->timestamps();

            $table->foreign('id_departement')->references('id_departement')->on('departements')->onDelete('cascade');
            $table->foreign('id_role')->references('id_role')->on('roles')->onDelete('cascade');
        });
       }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employe',function($table) {
            $table->dropForeign(['id_department']);
            $table->dropColumn(['id_departement']);
            $table->dropForeign(['id_role']);
            $table->dropColumn(['id_role']);
         });


        Schema::dropIfExists('employe');
    }
};
