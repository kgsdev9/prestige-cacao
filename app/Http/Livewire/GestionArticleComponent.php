<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\WithPagination;

class GestionArticleComponent extends Component
{
    use WithPagination;

    public $title, $content, $published_at, $articleId = null;
    public $showForm = false;
    protected $paginationTheme = 'bootstrap';

    // Validation des champs du formulaire
    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'published_at' => 'nullable|date',
    ];

    // Réinitialisation du formulaire
    public function resetForm()
    {
        $this->title = '';
        $this->content = '';
        $this->published_at = null;
        $this->articleId = null;
        $this->showForm = false;
    }

    // Ajouter ou modifier un article
    public function saveArticle()
    {
        $this->validate();

        if ($this->articleId) {
            // Mise à jour de l'article
            $article = Article::find($this->articleId);
            $article->update([
                'title' => $this->title,
                'content' => $this->content,
                'published_at' => $this->published_at,
            ]);
            $this->emit('toast', 'Article mis à jour avec succès');
        } else {
            // Création d'un nouvel article
            Article::create([
                'title' => $this->title,
                'content' => $this->content,
                'published_at' => $this->published_at,
            ]);
            $this->emit('toast', 'Article ajouté avec succès');
        }

        $this->resetForm();
    }

    // Modifier un article existant
    public function editArticle($id)
    {
        $article = Article::find($id);
        $this->articleId = $article->id;
        $this->title = $article->title;
        $this->content = $article->content;
        $this->published_at = $article->published_at;
        $this->showForm = true;
    }

    // Supprimer un article
    public function deleteArticle($id)
    {
        Article::find($id)->delete();
        $this->emit('toast', 'Article supprimé avec succès');
    }

    // Afficher ou masquer le formulaire
    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
        $this->resetForm();
    }

    public function render()
    {
        // Récupérer les articles avec la pagination
        $articles = Article::paginate(10);

        return view('livewire.gestion-article-component', compact('articles'))->extends('layout.layout');
    }
}
