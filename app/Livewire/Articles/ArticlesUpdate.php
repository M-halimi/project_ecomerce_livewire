<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Categorie;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ArticlesUpdate extends Component
{
    public Article $article;
 
    #[Validate('required|string|min:5|max:20')]
    public $name ;
    #[Validate('required|string|min:15|max:40')]
    public $description ;
    #[Validate('required|numeric')]

    public $stock ;
    #[Validate('required|numeric')]

    public $price ;
    #[Validate('required|numeric')]
    public $tva ;
    #[Validate('required|exists:categories,id')]
    public $categorie_id;
    public function mount(Article $article)
    {
        $this->article = $article;
        $this->name = $article->name;
        $this->description = $article->description;
        $this->stock = $article->stock;
        $this->price = $article->price;
        $this->tva = $article->tva;
        $this->categorie_id = $article->categorie_id;
    }
    public function update(){
        $this->Validate();
        // $article = Article::find($article);
        $this->article->update(
            $this->all()
        );
        Session()->flash('warning', 'Article has been successfully updated.');
       return $this->redirect('/article', navigate: true);
    }
 
    
    public function render()
    {
        $categories = Categorie::all();
        return view('livewire.articles.articles-update',['categories'=>$categories])->layout('layouts.app');
    }
}
