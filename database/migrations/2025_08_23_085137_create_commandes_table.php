<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('codeCommande')->unique();
            $table->string('nom')->nullable();;
            $table->string('prenom')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // si la commande peut être liée à un utilisateur
            $table->string('adresse')->nullable();
            $table->decimal('montant_ht', 10, 2)->default(0);
            $table->decimal('montant_tva', 10, 2)->default(0);
            $table->decimal('montant_ttc', 10, 2)->default(0);
            $table->enum('payment_status', ['en_attente', 'paye', 'annule'])->default('en_attente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
