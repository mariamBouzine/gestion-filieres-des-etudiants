@extends('layout.master')
@section('content')
    <h1>List Des Etudiants</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Filiere</th>
                <th colspan="3">Action</th>
            </tr>
        <thead>
        <tbody>
            @foreach ($Etudiant as $item)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$item["nom"]}}</td>
                    <td>{{$item["prenom"]}}</td>
                    <td>{{$item["sexe"]}}</td>
                    <td>{{$item->filiere->nom}}</td>
                    <td><a class="btn_action" href="etudiant/{{$item["id"]}}/edit">modifier</a></td>
                    <td><a  class="btn_action" href="etudiant/{{$item["id"]}}">montrer</a></td>
                    <td>
                        <form action="etudiant/{{$item["id"]}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn_delete" type="submit" onclick="return confirm('Are you sure you want to delete this item?')" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
