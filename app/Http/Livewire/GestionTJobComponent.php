<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TJob;
use App\Models\Tpays;
use App\Models\TVille;
use App\Models\TLibelleSpecialite;
use App\Models\TTypeEmploi;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Http;
use Str;
class GestionTJobComponent extends Component
{
    use WithPagination;

    public $title, $description, $slug, $t_libellespecialite, $visiteur, $typeemploi_id, $tville_id, $tpays_id, $tJobId = null;
    public $showForm = false;
    protected $paginationTheme = 'bootstrap';


    public function sendMessageToTelegram($message)
    {
        $telegramToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        // URL pour l'API Telegram
        $url = "https://api.telegram.org/bot{$telegramToken}/sendMessage";

        // Données du message
        $data = [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'HTML',
        ];

        // Envoie du message
        return Http::post($url, $data);
    }

    // Validation des champs du formulaire
    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        't_libellespecialite' => 'required',
        'typeemploi_id' => 'required|integer',
        'tville_id' => 'required|integer',
        'tpays_id' => 'required|integer',
    ];

    // Réinitialisation du formulaire
    public function resetForm()
    {
        $this->title = '';
        $this->slug = '';
        $this->description = '';
        $this->t_libellespecialite = '';
        $this->visiteur = false;
        $this->typeemploi_id = null;
        $this->tville_id = null;
        $this->tpays_id = null;
        $this->tJobId = null;
        $this->showForm = false;
    }



    // Ajouter ou modifier un emploi
    public function saveTJob()
    {
        $this->validate();

        if ($this->tJobId) {
            // Mise à jour de l'emploi
            $tJob = TJob::find($this->tJobId);
            $tJob->update([
                'title' => $this->title,
                'slug' => $this->slug,
                'description' => $this->description ?? 'test',
                't_libellespecialite' => $this->t_libellespecialite,
                'typeemploi_id' => $this->typeemploi_id,
                'tville_id' => $this->tville_id,
                'tpays_id' => $this->tpays_id,
            ]);

            $this->sendMessageToTelegram("Emploi mis à jour : {$this->title}");
            $this->emit('toast', 'Emploi mis à jour avec succès');
        } else {
            // Création d'un nouvel emploi
            TJob::create([
                'title' => $this->title,
                'slug' => $this->generateUniqueCodeProfile(),
                'description' => $this->description ?? 'test',
                't_libellespecialite' => $this->t_libellespecialite,
                'typeemploi_id' => $this->typeemploi_id,
                'tville_id' => $this->tville_id,
                'tpays_id' => $this->tpays_id,
            ]);
            if(1 == 2)
            {
                $this->sendMessageToTelegram("Nouvel emploi ajouté : {$this->title}");
            }

            $this->emit('toast', 'Emploi ajouté avec succès');
        }

        $this->resetForm();
    }



    // Modifier un emploi existant
    public function editTJob($id)
    {
        $tJob = TJob::find($id);
        $this->tJobId = $tJob->id;
        $this->title = $tJob->title;
        $this->slug = $tJob->slug;
        $this->description = $tJob->description;
        $this->t_libellespecialite = $tJob->t_libellespecialite;
        $this->visiteur = $tJob->visiteur;
        $this->typeemploi_id = $tJob->typeemploi_id;
        $this->tville_id = $tJob->tville_id;
        $this->tpays_id = $tJob->tpays_id;
        $this->showForm = true;
    }

    // Supprimer un emploi
    public function deleteTJob($id)
    {
        TJob::find($id)->delete();
        $this->emit('toast', 'Emploi supprimé avec succès');
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
        // Récupérer les emplois avec la pagination
        $tJobs = TJob::paginate(10);

        // Récupérer les listes des pays, villes, spécialités, et types d'emplois
        $pays = Tpays::all();
        $villes = TVille::all();
        $specialites = TLibelleSpecialite::all();
        $typesEmploi = TTypeEmploi::all();

        return view('livewire.gestion-t-job-component', compact('tJobs', 'pays', 'villes', 'specialites', 'typesEmploi'))->extends('layout.layout');
    }
}
