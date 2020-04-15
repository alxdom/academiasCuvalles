<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="/">ACADEMIAS</a>
        </div>
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
                @guest
                    <a class="nav-link" href="{{ route('register') }}">Registrar <span class="sr-only">(current)</span></a>
                @else
                <a href="{{ route('logout') }}"
                                   
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 <span class="sidebar-normal">{{ __('Cerrar sesión') }}</span>
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
                @endguest
              </li>
    </div>
</nav>