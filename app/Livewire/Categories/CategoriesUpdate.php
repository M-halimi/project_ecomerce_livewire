<?php

namespace App\Livewire\Categories;

use App\Livewire\Auth\Navigation;
use App\Models\Categorie;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoriesUpdate extends Component
{
    public Categorie $categorie;

    #[Validate('required|string|min:5|max:15')]
    public $name;
    public function mount(Categorie $categorie)
    {
        $this->categorie = $categorie;

        // $this->name = $categorie->name;
        $this->name = $categorie->name;
    }
    public function update()
    {
        $this->validate();
        dd($this->categorie->update($this->all()));
        Session()->flash('warninng', 'Category has been successfully updated.');    
        return $this->redirect('/categorie', navigate: true);
    }
    public function render()
    {
        return view('livewire.categories.categories-update')->layout('layouts.app');
    }
}
