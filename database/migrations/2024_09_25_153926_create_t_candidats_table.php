<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_candidats', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('photo')->nullable();
            $table->string('codeprofile');
            $table->string('email')->unique();
            $table->string('visiteur')->default(10);
            $table->string('telephone');
            $table->string('whattssap')->nullable();
            $table->foreignId('specialite_id')
                  ->constrained('t_libelle_specialites')
                  ->onDelete('cascade');
            $table->foreignId('ville_id')
                  ->constrained('t_villes')
                  ->onDelete('cascade');
            $table->foreignId('pays_id')
                  ->constrained('tpays')
                  ->onDelete('cascade');
            $table->text('description')->nullable();
            $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('cascade');
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
        Schema::dropIfExists('t_candidats');
    }
}
