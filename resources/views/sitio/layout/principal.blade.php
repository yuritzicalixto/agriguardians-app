<!DOCTYPE html>
<html lang="es">
<head>
@include('sitio.includes.head')
</head>
<body>
  <header class="hero" id="back">
@include('sitio.includes.menu')
  </header>

  <main class="main-principal">
    @yield('contenido')
  </main>
<br>
<br>
  <footer class="contact">
@include('sitio.includes.footer')
  </footer>
  <!--MENU-->
    @include('sitio.includes.scripts')

</body>
</html>
