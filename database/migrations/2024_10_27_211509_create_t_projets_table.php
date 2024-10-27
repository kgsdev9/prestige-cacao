<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_projets', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Champ pour le titre du projet
            $table->string('slug')->unique(); // Champ pour le slug, doit être unique
            $table->text('description'); // Champ pour la description du projet
            $table->string('lien_projet'); // Champ pour le lien du projet
            $table->foreignId('candidature_id')->constrained('t_candidats'); // Champ pour la référence à la candidature (avec contrainte de clé étrangère)
            $table->boolean('is_published')->default(false); // Champ pour savoir si le projet est publié, avec une valeur par défaut
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
        Schema::dropIfExists('t_projets');
    }
}
