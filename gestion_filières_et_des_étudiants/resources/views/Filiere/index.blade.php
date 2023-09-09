@extends('layout.master')
@section('content')
    <h1>List Des Etudiants</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th colspan="3">Action</th>
            </tr>
        <thead>
        <tbody>
            @foreach ($Filiere as $item)
                <tr>
                    <td>{{$item["id"]}}</td>
                    <td>{{$item["nom"]}}</td>
                    <td><a class="btn_action" href="filiere/{{$item["id"]}}/edit">modifier</a></td>
                    <td><a class="btn_action" href="filiere/{{$item["id"]}}">montrer</a></td>
                    <td>
                        <form action="filiere/{{$item["id"]}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn_delete" type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
