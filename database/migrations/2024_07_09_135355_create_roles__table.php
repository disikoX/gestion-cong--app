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

        //for creating table lol
        if(!Schema::hasTable('roles')) { 

            Schema::create('roles', function (Blueprint $table) {
                $table->id('id_role');
                $table->string('nom_role', 100);
                
            });

        }

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles_');
    }
};
