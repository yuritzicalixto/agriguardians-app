<nav class="nav-menu">
      <div class="container-logo">
        <img src="{{ asset ('assets/img/maiz.png')}}" alt="Logo" />
      </div>
      <!-- Ícono hamburguesa -->
    <div class="menu-toggle" id="menu-toggle">
        ☰
      </div>

      <div class="container-navegation" id="nav-links">
        <ul>
          <li><a href="{{ route('sitio.index')}}">AgriGuardians</a></li>
          <li><a href="{{ route('sitio.preguntas') }}">F.A.Q.s</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Registro</a></li>
        </ul>
      </div>
    </nav>
