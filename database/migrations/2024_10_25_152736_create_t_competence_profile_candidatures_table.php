<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCompetenceProfileCandidaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_competence_profile_candidatures', function (Blueprint $table) {
            $table->id();
            $table->string('libellecompetence');
            $table->unsignedBigInteger('candidature_id');
            $table->foreign('candidature_id')->references('id')->on('t_candidats');
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
        Schema::dropIfExists('t_competence_profile_candidatures');
    }
}
