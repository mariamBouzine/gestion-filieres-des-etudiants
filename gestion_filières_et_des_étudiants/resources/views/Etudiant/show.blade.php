@extends('layout.master')
@section('content')
    <div class="student-profile py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                  <img class="profile_img" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="">
                  <h3>{{$etudiant->nom}} {{$etudiant->prenom}}</h3>
                </div>
                <div class="card-body">
                  <p class="mb-0"><strong class="pr-1">Etudiant ID : </strong>{{$etudiant->id}}</p>
                  <p class="mb-0"><strong class="pr-1">Sexe : </strong>{{$etudiant->sexe}}</p>
                  <p class="mb-0"><strong class="pr-1">Filiere : </strong>{{$etudiant->filiere_id}}</p>
                </div>
                <a href="/etudiant" class="btn_back">Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
