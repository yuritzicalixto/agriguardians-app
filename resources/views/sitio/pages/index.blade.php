@extends('sitio.layout.principal')
@section('contenido')

    <section id="inicio" class="main-home">
      <div class="home-descript">
        <h3>¿Qué es Agriguardians?</h3>
        <h3>Es una <strong>Aplicación Interactiva</strong></h3>
        <br />
        <p>
          Agriguardians es un videojuego que te enseña sobre la agricultura
          prehispánica a través de una experiencia interactiva y educativa.
          Busca fomentar el interés en la agricultura sostenible.
          A través de desafíos en un mundo inspirado en los ecosistemas de México,
          los jugadores aprenden técnicas para cultivar en casa mientras protegen la naturaleza.
        </p>
        <br>
        <p>
          Enseña prácticas agrícolas sostenibles ideal para jóvenes
           de entre 12 y 21 años. Aprendes jugando, mientras creas tu
            propio huerto en casa.
        </p>
        <br />
        <h3></h3>
        <div class="descript-social">
          <a href="#"><img src="{{ asset ('assets/img/unity.png')}}" alt="Linkedin" /></a>
          <a href="#"><img src="{{ asset ('assets/img/instagram.png')}}" alt="Instagram" /></a>
        </div>
      </div>

      <div class="home-img" >
        <img src="{{ asset ('assets/img/macehual.png')}}" alt="Macehual" />
      </div>
    </section>


    <section class="info-section"  id="agriguardians">
        <div class="info-content">
          <div class="info-img">
            <img src="{{ asset ('assets/img/background.jpeg')}}" alt="Descripción de la imagen" />
          </div>
          <div class="info-text">
            <h2>"Descubre el poder de la agricultura ancestral con tecnología moderna."</h2>
            <ul>
              <li>Regístrate ahora y únete a la revolución agrícola.</li>
              <li>Únete a una comunidad educativa y divertida.</li>
              <li>Descarga la demo y empieza tu aventura.</li>
            </ul>
            <a href="#" class="btn-download">Descargar Ahora</a>
          </div>
        </div>
      </section>

      <div class="home-descript agri" >
        <h3>Características Principales</h3>
      </div>
      <section class="main-container" id="caracteristicas">
        <div class="cards-container">
          <div class="product-card">
            <img src="{{ asset ('assets/img/1-8.png')}}" alt="">
            <div class="product-info">
              <div>
                <p>Aprendizaje Interactivo</p>
                <p>Explora entornos prehispánicos en estilo low poly, interactúa con dioses antiguos y aprende sobre prácticas agrícolas sostenibles</p>
              </div>
            </div>
          </div>

          <div class="product-card">
            <img src="{{ asset ('assets/img/2-8.png')}}" alt="">
            <div class="product-info">
              <div>
                <p>Exploración</p>
                <p>Sumérgete en tres zonas representativas de México: Zona Árida, Zona Húmeda y Zona Semi Húmeda</p>
              </div>
            </div>
          </div>

          <div class="product-card">
            <img src="{{ asset ('assets/img/3-8.png')}}" alt="">
            <div class="product-info">
              <div>
                <p>Recolección de Datos</p>
                <p>Tus decisiones y progresos ayudan a nutrir una base de datos colectiva para comprender cómo aprenden los jóvenes sobre sostenibilidad y qué prácticas les resultan más útiles.</p>
              </div>
            </div>
          </div>

          <div class="product-card">
            <img src="{{ asset ('assets/img/4-8.png')}}" alt="">
            <div class="product-info">
              <div>
                <p>Progresión narrativa</p>
                <p>Cada nivel está guiado por un dios/diosa mesoamericano (ej. Tlaloc, Xochipilli, Tezcatlipoca), reforzando el contexto cultural y el aprendizaje ecológico.</p>
              </div>
            </div>
          </div>

          <div class="product-card">
            <img src="{{ asset ('assets/img/5-8.png')}}" alt="">
            <div class="product-info">
              <div>
                <p>Sistema de logros</p>
                <p>El jugador gana herramientas, consejos y objetos para mejorar su huerto a medida que supera desafíos agrícolas en el juego.</p>
              </div>
            </div>
          </div>

          <div class="product-card">
            <img src="{{ asset ('assets/img/6-8.png')}}" alt="">
            <div class="product-info">
              <div>
                <p>Enfoque STEAM</p>
                <p>Fomenta habilidades en ciencia, tecnología, ecología y cultura ancestral de manera interactiva y motivadora.</p>
              </div>
            </div>
          </div>
        </div>
      </section>




@endsection
