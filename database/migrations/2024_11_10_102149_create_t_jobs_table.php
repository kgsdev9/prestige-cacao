<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('typeemploi_id')->constrained('t_type_emplois')->onDelete('cascade');
            $table->text('description');
            $table->timestamp('publish_at')->nullable();
            $table->integer('visiteur')->default(10);
            $table->foreignId('tville_id')->constrained('t_villes')->onDelete('cascade');
            $table->foreignId('tpays_id')->constrained('tpays')->onDelete('cascade');
            $table->foreignId('t_libellespecialite')->constrained('t_libelle_specialites')->onDelete('cascade');
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
        Schema::dropIfExists('t_jobs');
    }
}
