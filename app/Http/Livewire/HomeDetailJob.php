<?php

namespace App\Http\Livewire;

use App\Models\TJob;
use Livewire\Component;

class HomeDetailJob extends Component
{

    public $jobid;
    public $job;
    public function mount($slug)
    {
        $this->jobid = $slug;
        $this->job = TJob::where('slug', $this->jobid)->firstOrFail();

    }
    public function render()
    {
        return view('livewire.home-detail-job')->extends('layout.layout');;
    }
}
