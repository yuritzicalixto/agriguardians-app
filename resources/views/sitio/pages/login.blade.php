@extends('sitio.layout.principal')
@section('contenido')

<!--Contenedor Principal de Inicio de Sessión -->
    <div class="login">
        <div class="form-container">
            <h1 class="title">Inicio de Sesión</h1>

            <form action="/" class="form">
                <label for="email" class="label">Correo Electronico</label>
                <input type="text" id="email" placeholder="xxxx@example.com" class="input input-passwors" required>

                <label for="password" class="label">Contraseña</label>
                <input type="password" id="password" placeholder="********" class="input input-password" required>

                <!--Boton-->
                <input type="submit" value="Login" class="primary-button login-button">

            </form>

            <button class="secondary-button signup-button"> <a href="{{ route('sitio.registro') }}">Sign Up</a></button>
        </div>
    </div>

@endsection
