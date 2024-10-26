<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TVilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_villes')->insert([
            ['libelleville'=> 'Abidjan'] ,
            ['libelleville'=> 'Lome'] ,
            ['libelleville'=> 'Burkina Faso'] ,
            ['libelleville'=> 'Accra'] ,
        ]);
    }
}
