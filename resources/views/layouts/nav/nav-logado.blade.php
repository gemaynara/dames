<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand " href="{{route('home')}}"><img class="brand-nav"
                                                               src="{{asset('assets/images/logo.svg')}}"
                                                               alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex justify-content-between w-100">
                @include('layouts.nav.busca')
                <div class="d-flex">
                    @if(auth()->user()->perfil == "S")
                        @include('layouts.nav.nav-salao')
                    @elseif(auth()->user()->perfil == "D")
                        @include('layouts.nav.nav-distribuidor')
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="card drop-nav hide-master" id="drop-nav">
    <ul class="">
        <li><a href="" class="border-custom">Ajustes</a></li>
        <li><a href="" class="border-custom">Perfil</a></li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Sair</a>

            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>
