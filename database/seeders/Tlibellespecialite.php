<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tlibellespecialite extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_libelle_specialites')->insert([
            ['libellespecialite' => 'Développeur Angular'],
            ['libellespecialite' => 'Community Manager'],
            ['libellespecialite' => 'Développeur Laravel'],
            ['libellespecialite' => 'Web Designer'],
            ['libellespecialite' => 'Administrateur Système'],
            ['libellespecialite' => 'Consultant SEO'],
            ['libellespecialite' => 'Développeur Mobile'],
            ['libellespecialite' => 'Développeur Front-end'],
            ['libellespecialite' => 'Développeur Back-end'],
            ['libellespecialite' => 'Développeur Full-stack'],
            ['libellespecialite' => 'Expert Data Science'],
            ['libellespecialite' => 'Technicien Réseau'],
            ['libellespecialite' => 'Animatrice TV'],
            ['libellespecialite' => 'Graphiste'],
            ['libellespecialite' => 'Consultant Marketing Digital'],
            ['libellespecialite' => 'Rédacteur Web'],
            ['libellespecialite' => 'Formateur Informatique'],
            ['libellespecialite' => 'Community Manager Instagram'],
            ['libellespecialite' => 'Spécialiste en Cyber Sécurité'],
            ['libellespecialite' => 'Développeur Python'],
            ['libellespecialite' => 'Consultant en Cloud Computing'],
            ['libellespecialite' => 'Administrateur Bases de Données'],
            ['libellespecialite' => 'Consultant IA (Intelligence Artificielle)'],
        ]);
    }
}


