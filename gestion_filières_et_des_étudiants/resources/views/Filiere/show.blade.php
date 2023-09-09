@extends('layout.master')
@section('content')
    <div class="student-profile py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-sm">
                {{-- <div class="card-header bg-transparent text-center">
                  <img class="profile_img" src="https://www.vecteezy.com/free-vector/profile-icon" alt="">
                  <h3>Ishmam Ahasan Samin</h3>
                </div> --}}
                <div class="card-body">
                  <p class="mb-0"><strong class="pr-1">Filiere ID : </strong>{{$filiere->id}}</p>
                  <p class="mb-0"><strong class="pr-1">Filiere : </strong>{{$filiere->nom}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
