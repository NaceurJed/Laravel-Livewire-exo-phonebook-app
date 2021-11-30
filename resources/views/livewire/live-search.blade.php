<div>
    <h3>Find a Contact</h3>

    {{-- Type de recherche --}}
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault1">
            By name
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
            By city
        </label>
    </div>

    {{-- si on veut déclencher la recherche seulement aprés confirmation on va créer un formulaire et utiliser wire:submit.prevent --}}
    {{-- <form wire:submit.prevent="searchByName"> --}}
    <div class="input-group mb-3">
        {{-- si on avait une balise select on fait wire:model.lazy pour pas avoir de requête a chaque deplacement de selection --}}
        {{-- le wire:model va générer des requête a chaque fois qu'on tape une lettre -> ça fait beaucoup de requête.
        avec wire:model.debounce.1s on va avoir la requête que si on arrête de tape pendant 1 seconde --}}
        <input type="text" wire:model="name" class="form-control" placeholder="Friend's username"
            aria-label="Recipient's username" aria-describedby="basic-addon2" autocomplete="off">
        <span class="input-group-text" id="basic-addon2">&#128210;</span>
    </div>
    {{-- </form> --}}
    {{-- on ne fait la recherche que si on a un contact au moins --}}
    @if (count($contacts) > 0)
        <div class="list-group mt-2">
            @foreach ($contacts as $contact)
                <div class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $contact['name'] }}</h5>
                        <small class="text-muted">{{ $contact['email'] }}</small>
                    </div>
                    <p class="mb-1">{{ $contact['city'] }}</p>
                    <small class="text-muted">{{ $contact['phone'] }}</small>
                </div>
            @endforeach
        </div>
    @endif
</div>
