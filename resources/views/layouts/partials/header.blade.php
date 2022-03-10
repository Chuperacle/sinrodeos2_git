<style>
    .active{
        font-weight: bold;
        background:purple
    }
</style>
<header>
    <h1>Coders Free</h1>
    <nav>
        <ul>
            <li><a href="{{ route('cursos.index') }}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}" >Home</a></li>
            <li><a href="{{ route('cursos.index') }}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a></li>
            <li><a href="{{ route('nosotros') }}"class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>
            <li><a href="{{ route('contactanos.index') }}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contactanos</a></li>
        </ul>
    </nav>
</header>