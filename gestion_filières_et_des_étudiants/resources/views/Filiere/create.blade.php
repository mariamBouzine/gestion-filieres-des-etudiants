@extends('layout.master')
@section('content')
    <h1>Ajouter Un Etudiant</h1>
    <form action="/filiere" method="POST">
        @csrf
        <div class="myrow">
            <span>
              <input class="gate" id="class" type="text" name="nom" placeholder="Entrez votre nom" /><label for="class">Nom</label>
            </span>
            <span>
              <input class="gate" id="move" type="submit" value="submit" /><label for="move">Envoyer</label>
            </span>
          </div>
    </form>
@endsection
