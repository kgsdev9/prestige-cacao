<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('intitule');
            $table->foreignId('typeemploi_id')
                  ->constrained('t_type_emplois')
                  ->onDelete('cascade');
            $table->string('nom_entreprise');
            $table->string('localisation');
            $table->boolean('current_position')->default(false);
            $table->string('mois_debut')->nullable();
            $table->string('mois_fin')->nullable();
            $table->string('annee_debut');
            $table->string('annee_fin')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('t_candidat_id')->constrained('t_candidats')->onDelete('cascade');
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
        Schema::dropIfExists('t_experiences');
    }
}
