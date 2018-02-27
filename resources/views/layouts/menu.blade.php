    @if(Auth::user()->authorizeRoles(['name'=>"Administrador"]))
        @include('layouts.sidebar')
    @elseif(Auth::user()->authorizeRoles(['name'=>"Estudiante"]))
        @include('layouts.menu-student')
    @endif