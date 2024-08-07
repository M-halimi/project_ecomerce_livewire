<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Categorie;
use Livewire\Component;
use Livewire\WithPagination;


class ArticlesIndex extends Component
{
    use WithPagination;

    public function deleteArticle($id)
{
    $article = Article::find($id);
    $article->delete();
    Session()->flash('danger', 'Article has been successfully deleted.');
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
