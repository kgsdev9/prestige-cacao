<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Role; // Ajout de l'importation du modèle Role
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class GestionUserComponent extends Component
{
    use WithPagination;

    public $name, $email, $password, $role_id, $suscribe_id, $userId = null;
    public $showForm = false;
    protected $paginationTheme = 'bootstrap';

    // Validation des champs du formulaire
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,',
        'password' => 'nullable|min:3|confirmed',
        'role_id' => 'required|integer|exists:roles,id',
    ];

    // Réinitialiser le formulaire
    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->role_id = '';
        $this->suscribe_id = '';
        $this->userId = null;
        $this->showForm = false;
    }

    // Ajouter ou modifier un utilisateur
    public function saveUser()
    {
        // $this->validate();

        if ($this->userId) {
            // Mise à jour de l'utilisateur
            $user = User::find($this->userId);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'role_id' => $this->role_id,
                'password' => $this->password ? Hash::make($this->password) : $user->password, // Si le mot de passe est vide, on ne le change pas
            ]);
            $this->emit('toast', 'Utilisateur mis à jour avec succès');
        } else {
            // Création d'un nouvel utilisateur
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'role_id' => $this->role_id,
                'password' => Hash::make($this->password),
            ]);
            $this->emit('toast', 'Utilisateur ajouté avec succès');
        }

        $this->resetForm();
    }

    // Modifier un utilisateur existant
    public function editUser($id)
    {
        $user = User::find($id);
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role_id = $user->role_id;
        $this->suscribe_id = $user->suscribe_id;
        $this->showForm = true;
    }

    // Supprimer un utilisateur
    public function deleteUser($id)
    {
        User::find($id)->delete();
        $this->emit('toast', 'Utilisateur supprimé avec succès');
    }

    // Afficher ou masquer le formulaire
    public function toggleForm()
    {
        $this->showForm = !$this->showForm;

    }

    public function render()
    {
        // Charger les utilisateurs avec la pagination
        $users = User::paginate(10);

        // Charger les rôles pour les utiliser dans le select
        $roles = Role::all();

        return view('livewire.gestion-user-component', compact('users', 'roles'))->extends('layout.layout');
    }
}
