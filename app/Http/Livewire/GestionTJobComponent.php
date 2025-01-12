<?php

namespace App\Http\Livewire;

use App\Models\Formation;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class GestionTJobComponent extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name, $description, $image, $tJobId = null;
    public $showForm = false;
    protected $paginationTheme = 'bootstrap';


    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'image' => 'required',
    ];

    // Réinitialisation du formulaire
    public function resetForm()
    {
        $this->name = '';
        $this->description = '';
        $this->image = '';
        $this->showForm = false;
    }



    // Ajouter ou modifier un emploi
    public function saveTJob()
    {


        $this->validate();

        if ($this->image) {
            $image = md5($this->image . microtime()) . '.' . $this->image->extension();
            $this->image->storeAs('cv/candidat', $image);
        }

        if ($this->tJobId) {
            // Mise à jour de l'emploi
            $tJob = Formation::find($this->tJobId);
            $tJob->update([
                'name' => $this->name,
                'image' => $image,
                'description' => $this->description,
            ]);

            $this->emit('toast', 'Formation mis à jour avec succès');
        } else {
            // Création d'un nouvel emploi
            Formation::create([
                'name' => $this->name,
                'image' => $image,
                'description' => $this->description,
            ]);
            if (1 == 2) {
                $this->sendMessageToTelegram("Nouvel Formation ajouté : {$this->title}");
            }

            $this->emit('toast', 'Formation ajouté avec succès');
        }

        $this->resetForm();
    }



    // Modifier un emploi existant
    public function editTJob($id)
    {
        $tJob = Formation::find($id);
        $this->tJobId = $tJob->id;
        $this->name = $tJob->name;
        $this->showForm = true;
    }

    // Supprimer un emploi
    public function deleteTJob($id)
    {
        Formation::find($id)->delete();
        $this->emit('toast', 'Formation supprimé avec succès');
    }

    // Afficher ou masquer le formulaire
    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function generateUniqueCodeProfile()
    {
        // Génère un identifiant unique avec le préfixe "c-" au lieu de "c/"
        $code = 'c-' . Str::uuid();

        // Assurez-vous que le code est unique dans la base de données
        while (TJob::where('slug', $code)->exists()) {
            $code = 'c-' . Str::uuid();
        }

        return $code;
    }

    public function render()
    {
        $tJobs = Formation::paginate(10);
        return view('livewire.gestion-t-job-component', compact('tJobs'))->extends('layout.layout');
    }
}
