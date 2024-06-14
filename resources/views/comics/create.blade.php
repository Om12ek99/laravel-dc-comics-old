<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>crea</h1>
    <form 
    method="post"
    action="{{route('comics.store')}}">
    @csrf
    @method('post')

    <!-- title -->
    <div>
        <label for="title">Inserisci un titolo</label>
        <input type="text"  name="title" placeholder="titolo">
    </div>
    <!-- description -->
    <div>
        <label for="desc">Inserisci una descrizione</label>
        <input type="text"  name="desc" placeholder="descrizione">
    </div>
    <!-- prezzo -->
    <div>
        <label for="price">Inserisci un prezzo</label>
        <input type="text"  name="price" placeholder="prezzo"> 
    </div>
        <!-- serie -->
    <div>
        <label for="title">Inserisci la serie</label>
        <input type="text"  name="series" placeholder="serie">
    </div>
        <!-- data -->
        <div>
        <label for="date">Inserisci la data di pubblicazione</label>
        <input type="date"  name="date" placeholder="data di pubblicazione">
    </div>
        <!-- genere -->
        <div>
        <label for="type">Inserisci il genere </label>
        <input type="text"  name="type" placeholder="genere">
    </div>
    <div>
        <input type="submit" value="salva modifiche">
    </div>
</form>
</body>
</html>