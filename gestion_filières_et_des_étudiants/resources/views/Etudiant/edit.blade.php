@extends('layout.master')
@section('content')
    <h1>Modifier Un Etudiant</h1>
    <form action="{{route('etudiant.update',['etudiant'=>$etudiant->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="myrow">
            <span>
              <input class="gate" id="class" value="{{$etudiant!= null ? $etudiant->nom : "" }}" type="text" name="nom" placeholder="Entrez votre nom" /><label for="class">Nom</label>
            </span>
            <span>
                <input class="gate" id="class" value="{{$etudiant!= null ? $etudiant->prenom : "" }}" type="text" name="prenom" placeholder="Entrez votre prenom" /><label for="class">Nom</label>
            </span>
            <span>
                <select name="filiere_id" id="gate" class="gate">
                  <option  value="0" disabled="disabled" selected="selected">Choisissez une filière</option>
                  @foreach ($filieres as $filiere)
                    @if($filiere->id==$etudiant->filiere_id)
                        <option value="{{$filiere->id}}" selected>{{$filiere->nom}}</option>
                    @else
                        <option value="{{$filiere->id}}" >{{$filiere->nom}}</option>
                    @endif
                  @endforeach
                </select>
                <label for="element">Filière</label>
            </span>
            <div class="check">
                    <span>
                        <input type="radio" value="femme" id="femme" name="sexe"  {{ $etudiant->sexe == 'femme' ? 'checked' : '' }} class="gate"/>
                        <label for="radio1">femme</label>
                    </span>
                    <span>
                        <input type="radio" value="homme" id="homme" {{ $etudiant->sexe == 'Homme' ? 'checked' : '' }} name="sexe" class="gate"/>
                        <label for="radio2">homme</label>
                    </span>

            </div>
            <span>
              <input class="gate" id="move" type="submit" value="submit" /><label for="move">Update</label>
            </span>
          </div>
    </form>
@endsection
