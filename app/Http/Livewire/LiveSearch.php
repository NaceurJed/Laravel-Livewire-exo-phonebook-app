<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Service\PhoneBook;
//On va créer un service pour rechercher nos contacts: App\Service

class LiveSearch extends Component
{
    public $name;
    public $contacts = []; //ici on initialise le tableau de contact


    // Pour la recherche en direct: a chaque fois que Name change
    public function updatedName($value){
        
        $this->contacts = PhoneBook::searchByName($value);
    }


    public function render()
    {
        return view('livewire.live-search');
    }
}
