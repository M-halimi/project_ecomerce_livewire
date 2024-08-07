<?php

namespace App\Livewire\Categories;

use App\Models\Categorie;
use Livewire\Component;

class CategoriesIndex extends Component
{
    public $categories = [];
    public $categorie = '';
    public function deleteCategorie($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
     Session()->flash('danger', 'Category has been successfully deleted.');
        return $this->redirect('/categorie', navigate: true);
    }
    public function mount()
    {
        $this->categories = Categorie::all();
    }
    public function render()
    {
        return view('livewire.categories.categories-index')->layout('layouts.app')->with('categories');
    }
}
