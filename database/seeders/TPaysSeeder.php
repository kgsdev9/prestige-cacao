<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TPaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tpays')->insert([
            ['libellepays'=> 'Cote d\'ivoire '] ,
            ['libellepays'=> 'Burkina Faso'] ,
            ['libellepays'=> 'Togo'] ,
        ]);
    }
}
