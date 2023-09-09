<section class="navigation">
    <div class="nav-container">
      <div class="brand">
        <a href="/home">🍀 Clover Clothing</a>
      </div>
      <nav>
    <div class="nav-mobile">
      <a id="nav-toggle" href="/home"><span></span></a>
    </div>
    <ul class="nav-list">
      <li><a href="/home">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" href="/etudiant">Etudiant</a>
        <ul class="dropdown-menu">
            <li><a href="/etudiant">Liste Etudiants</a></li>
            <li><a href="/etudiant/create">Add Etudiant</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" href="/filiere">Filiere</a>
        <ul class="dropdown-menu">
            <li><a href="/filiere">Liste Filiere</a></li>
            <li><a href="/filiere/create">Add Filiere</a></li>
            {{-- <li><a href="/filiere/show">Show Filiere</a></li> --}}
        </ul>
      </li>
      <li>
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
      </li>
    </ul>
  </nav>
      </div>
</section>
