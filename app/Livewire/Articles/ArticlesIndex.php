<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ArticlesIndex extends Component
{
    // use WithPagination ,WithoutUrlPagination;
    // methode delete
    public function deleteArticle($id)
{
    $article = Article::find($id);
    $article->delete();
    return $this->redirect('/article', navigate: true);
}
    public $articles = [];
    public $article = '' ;
    // methode index
    public function mount(){
        $this->articles = Article::all();
    }
    
   
    public function render()
    {
        
        return view('livewire.articles.articles-index'
        )->layout('layouts.app')->with('articles','categories');
    }
}
