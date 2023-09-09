@extends('layout.master')
@section('content')
    <h1>Ajouter Un Etudiant</h1>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert  error">
                <div>Error!</div>
                <div class="typeerror">{{$error}}</div>
            </div>
        @endforeach
    @endif
    <form action="{{route('etudiant.store')}}" method="POST">
        @csrf
        <div class="myrow">
            <span>
              <input class="gate" id="class" type="text" name="nom" placeholder="Entrez votre nom" /><label for="class">Nom</label>
            </span>
            <span>
              <input class="gate" id="element" type="text" name="prenom" placeholder="Entrez votre prenom" /><label for="element">Prenom</label>
            </span>
            <span>
                <select name="filiere_id" id="gate" class="gate">
                  <option  value="0" disabled="disabled" selected="selected">Choisissez une filière</option>
                  @foreach ($filieres as $filiere)
                    <option value="{{$filiere->id}}">{{$filiere->nom}}</option>
                  @endforeach
                </select>
                <label for="element">Filière</label>
            </span>
            <div class="check">
                <span>
                    <input type="radio" value="femme" id="femme" name="sexe"  class="gate"/>
                    <label for="radio1">femme</label>

                </span>
                <span>
                    <input type="radio" value="homme" id="homme" name="sexe" class="gate"/>
                    <label for="radio2">homme</label>
                </span>
            </div>
            <span>
              <input class="gate" id="move" type="submit" value="submit" /><label for="move">Envoyer</label>
            </span>
          </div>
    </form>
@endsection
