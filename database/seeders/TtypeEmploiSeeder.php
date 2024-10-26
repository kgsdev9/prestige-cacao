<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TtypeEmploiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_type_emplois')->insert([
            ['libelletypeemploi'=> 'CDI'],          // Contrat à Durée Indéterminée
            ['libelletypeemploi'=> 'CDD'],          // Contrat à Durée Déterminée
            ['libelletypeemploi'=> 'Intérim'],      // Travail temporaire
            ['libelletypeemploi'=> 'Stage'],        // Stage
            ['libelletypeemploi'=> 'Freelance'],    // Travail indépendant
            ['libelletypeemploi'=> 'Temps plein'],  // Temps plein
            ['libelletypeemploi'=> 'Temps partiel'],// Temps partiel
            ['libelletypeemploi'=> 'Apprentissage'],// Contrat d'apprentissage
            ['libelletypeemploi'=> 'Alternance'],   // Contrat en alternance
            ['libelletypeemploi'=> 'Contrat de professionnalisation'], // Contrat pro
            ['libelletypeemploi'=> 'Volontariat'],  // Volontariat (ex : service civique)
            ['libelletypeemploi'=> 'Consultant'],   // Consultant
            ['libelletypeemploi'=> 'Bénévolat'],    // Travail bénévole
        ]);

    }
}
