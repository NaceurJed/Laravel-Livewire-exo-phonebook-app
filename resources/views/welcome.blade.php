<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

    <title>Phonebook App</title>
    @livewireStyles
</head>


<body>
    <div class="row" style="height: 200px">
        <div class="col-md-6 mx-auto fw-bolder">
            <h1 class="text-primary text-center">Phonebook</h1>


            @livewire('live-search')
        </div>
    </div>

    @livewireScripts
</body>

</html>
