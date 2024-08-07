<?php

namespace App\Livewire\Categories;

use App\Models\Categorie;
use Livewire\Component;

class CategoriesIndex extends Component
{
    public $categories = [];
    public $categorie = '';
    
    public function mount()
    {
        $this->categories = Categorie::all();
    }
    public function render()
    {
        return view('livewire.categories.categories-index')->layout('layouts.app');
    }
}
