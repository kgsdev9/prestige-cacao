<?php

namespace App\Http\Livewire;

use App\Models\Formation;
use Livewire\Component;


class HomeCandidat extends Component
{
    public function render()
    {
        return view('livewire.home-candidat', [
            'listeFormations' => Formation::all()
        ])->extends('layout.layout');
    }


}
