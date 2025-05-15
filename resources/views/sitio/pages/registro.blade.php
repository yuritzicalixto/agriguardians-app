@extends('sitio.layout.principal')
@section('contenido')
<!--Contenedor Principal-->

    <div class="login ">
        <div class="form-container registro-main">
            <!-- <img src="./assets/logos/logo.png" alt="logo" class="logo"> -->

            <h1 class="title">Registro</h1>

            <form action="/" class="form">
                <div>

                <label for="name" class="label">Name</label>
                <input type="text" id="name" placeholder="Name" class="input input-name">

                <label for="email" class="label">Email Address</label>
                <input type="text" id="email" placeholder="xxxx@example.com" class="input input-email">

                <label for="password" class="label">Password</label>
                <input type="password" id="password" placeholder="********" class="input input-password">

                </div>

                <!--Boton-->
                <input type="submit" value="Create" class="primary-button login-button">

            </form>
        </div>
    </div>
@endsection
