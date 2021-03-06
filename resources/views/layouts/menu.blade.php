    @if(Auth::user()->authorizeRoles(['name'=>"Administrador"]))
        @include('layouts.sidebar')
    @elseif(Auth::user()->authorizeRoles(['name'=>"Estudiante"]))
        @include('layouts.menu-student')
    @elseif(Auth::user()->authorizeRoles(['name'=>"Profesor"]))
        @include('layouts.menu-professor')
    @elseif(Auth::user()->authorizeRoles(['name'=>"Recepcionista"]))
        @include('layouts.menu-recepcionist')
    @elseif(Auth::user()->authorizeRoles(['name'=>"Administrativo"]))
        @include('layouts.menu-administrative')
    @elseif(Auth::user()->authorizeRoles(['name'=>"Jefe de ventas"]))
        @include('layouts.menu-sale-boss')
    @elseif(Auth::user()->authorizeRoles(['name'=>"Jefe de administración"]))
        @include('layouts.menu-administration-boss')
    @elseif(Auth::user()->authorizeRoles(['name'=>"Jefe de académico"]))
        @include('layouts.menu-academic-boss')
    @endif