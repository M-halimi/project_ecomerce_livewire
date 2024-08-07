<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Categorie;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ArticlesCreate extends Component
{
    #[Validate('required|string|min:5|max:20')]
    public $name = '';
    #[Validate('required|string|min:15|max:40')]
    public $description = '';
    #[Validate('required|numeric')]

    public $stock = '';
    #[Validate('required|numeric')]

    public $price = '';
    #[Validate('required|numeric')]
    public $tva = '';
    #[Validate('required|exists:categories,id')]

    public $categorie_id = 0;
    

    public function save()
    {
       $this->Validate();
       Article::create($this->only(['name','description','stock','price','tva','categorie_id']));
       Session()->flash('status', 'categorie create successfully.');
       return $this->redirect('/article', navigate: true);

    }
    public function render()
    {
        $categories = Categorie::all();
        return view('livewire.articles.articles-create', ['categories'=>$categories])->layout('layouts.app');
    }
}
