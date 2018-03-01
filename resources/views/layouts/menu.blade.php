    @if(Auth::user()->authorizeRoles(['name'=>"Administrador"]))
        @include('layouts.sidebar')
    @else(Auth::user()->authorizeRoles(['name'=>"Estudiante"]))
        @include('layouts.menu-student')
    @endif