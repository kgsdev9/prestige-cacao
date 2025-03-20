<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('etablissement_id');
            $table->foreign('classe_id')->references('id')->on('classes');
            $table->foreign('parent_id')->references('id')->on('parents');
            $table->foreign('etablissement_id')->references('id')->on('etablissements');
            $table->string('nom_etablissement')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('enfants');
    }
}
