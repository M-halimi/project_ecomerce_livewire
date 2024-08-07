<?php

namespace App\Livewire\Categories;

use App\Models\Categorie;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Pest\Plugins\Only;

class CategoriesCreate extends Component
{
    public $categories = '';
    public $categorie = '';
    #[Validate('required|string|min:5|max:15')]
    public $name = '';
    public function save()
    {
     $this->validate();
     Categorie::create($this->only(['name']));    
     Session()->flash('status', 'article create successfully.');
     $this->redirect('/categorie', navigate:true);

    }
    public function render()
    {
        return view('livewire.categories.categories-create')->layout('layouts.app');
    }
}
