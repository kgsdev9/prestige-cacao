<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table)
        {
            $table->id();
            $table->string('codetransaction')->unique();
            $table->decimal('montant', 30, 2);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('modereglement_id')->constrained('modereglements');
            $table->string('qr_code')->unique();
            $table->enum('statut', ['En attente', 'Terminé', 'Annulée'])->default('En attente');
            $table->string('ip_address')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('device_name')->nullable();
            $table->string('session_id')->nullable();
            $table->decimal('geo_lat', 9, 6)->nullable();
            $table->decimal('geo_lon', 9, 6)->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
