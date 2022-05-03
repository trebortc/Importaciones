<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/dashboard">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    @can('view-user')
        <a class="nav-link" href="/users">
            <i class=" fas fa-users"></i><span>Usuarios</span>
        </a>
    @endcan
    @can('view-rol')
        <a class="nav-link" href="/roles">
            <i class=" fas fa-user-lock"></i><span>Roles</span>
        </a>
    @endcan
    @can('view-course')
        <a class="nav-link" href="/courses">
            <i class=" fas fa-school"></i><span>Clases grabadas</span>
        </a>
        @can('view-asesoria')
            <a class="nav-link" href="/asesorias">
                <i class=" fas fa-laptop-code"></i><span>Gestionar Asesoria</span>
            </a>
        @endcan
        @can('view-anexo')
            <a class="nav-link" href="/anexos">
                <i class=" fas fa-file"></i><span>Material de clases</span>
            </a>        
        @endcan
        <a class="nav-link" href="https://www.aduana.gob.ec/contents/app/senaemovil/index.jsp#theapp" target="_blank">
            <i class=" fas fa-calculator"></i><span>Calculadora</span>
        </a>
        {{-- <a class="nav-link" href="/courses">
            <i class=" fas fa-video"></i><span>Asesorias grabadas</span>
        </a> --}}
    @endcan
</li>
