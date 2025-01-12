<?php

namespace App\Http\Livewire;

use App\Models\Formation;
use App\Models\TJob;
use Livewire\Component;

class HomeDetailJob extends Component
{

    public $jobid;
    public $job;
    public function mount($slug)
    {
        $this->jobid = $slug;
        $this->job = Formation::where('id', $this->jobid)->firstOrFail();
        // $this->job->increment('visiteur');
    }
    public function render()
    {
        return view('livewire.home-detail-job')->extends('layout.layout');;
    }
}
