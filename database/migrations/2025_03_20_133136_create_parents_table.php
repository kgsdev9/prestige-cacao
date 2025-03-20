<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('code_affiliation')->unique();
            $table->string('piece_parent')->nullable();
            $table->string('nombre_enfant')->nullable();
            $table->string('fiche_adhesion')->nullable();
            $table->string('adresse');
            $table->string('telephone')->nullable();
            $table->string('telephone_1')->nullable();
            $table->string('telephone_2')->nullable();
            $table->string('contact')->nullable();
            $table->string('contact_urgent')->nullable();
            $table->unsignedBigInteger('commune_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('commune_id')->references('id')->on('communes');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('adhesion')->default(0);
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
        Schema::dropIfExists('parents');
    }
}
