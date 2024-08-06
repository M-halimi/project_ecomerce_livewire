<?php

namespace App\Livewire;

use Livewire\Component;

class ArticlesIndex extends Component
{
    // public $articles = [];
    // public $article = '';
    // public $Designation = '';
    // public function add(){
    //     $this->articles [] = $this->article;
    //     $this->articles [] = $this->Designation;
    //     $this->article = '';
    //     $this->Designation = '';
    
    // public function mount(){
        
    // }
    public function render()
    {
        return view('livewire.articles.articles-index')->layout('layouts.app');
    }
}
