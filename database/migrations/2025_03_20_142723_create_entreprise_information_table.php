<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepriseInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise_information', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('numero_registre')->nullable();
            $table->string('adresse')->nullable();  // Adresse de l'entreprise
            $table->string('telephone')->nullable();  // Numéro de téléphone de l'entreprise
            $table->string('telephone_2')->nullable();  // Numéro de téléphone de l'entreprise
            $table->string('telephone_3')->nullable();  // Numéro de téléphone de l'entreprise
            $table->string('fax')->nullable();  // Numéro de téléphone de l'entreprise
            $table->string('email')->unique();  // Email de contact de l'entreprise
            $table->string('site_web')->nullable();  // Site web de l'entreprise
            $table->string('secteur_activite')->nullable();  // Secteur d'activité de l'entreprise
            $table->string('type_entreprise')->nullable();  // Secteur d'activité de l'entreprise
            $table->decimal('capital_social', 15, 2)->nullable();  // Capital social de l'entreprise
            $table->date('date_creation')->nullable();  // Date de création de l'entreprise
            $table->timestamps();  // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprise_information');
    }
}
