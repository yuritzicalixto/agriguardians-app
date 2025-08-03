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
        <img src="{{ asset ('assets/img/tlaloc.png')}}" alt="tlaloc" />
        <img src="{{ asset ('assets/img/guerrero.png')}}" alt="guerrero" />
        <img src="{{ asset ('assets/img/diosa.png')}}" alt="diosa" />
      </div>
    </section>

    <!-- DESCARGAR DEMO -->
     <section class="demo-main" id="agriguardians">
      <div class="explore-card">
        <div class="explore-image">
          <img src="{{ asset ('assets/img/puma.png')}}" alt="Puma">
        </div>
        <div class="explore-text">
          <h2>Descubre el poder de la agricultura ancestral con tecnología moderna.</h2>
          <p>¡No te quedes fuera de la revolución agrícola! Regístrate hoy y forma parte de una comunidad educativa y divertida que está cambiando el futuro. Descarga la demo y comienza tu aventura ahora mismo.</p>
          <button class="explore-button">Demo</button>
        </div>
      </div>
    </section>

<!-- CARACTERISTICAS -->
      <section class="caracteristicas-main" id="caracteristicas">
        <h2>Características Principales</h2>
    <div class="grid-cursos">
    <div class="tarjeta">
      <img src="{{ asset ('assets/img/agri-1.jpeg')}}" alt="Curso CSS">
      <div class="overlay text">
        <p>Explora entornos prehispánicos en estilo low poly, interactúa con dioses antiguos y aprende sobre prácticas agrícolas sostenibles.</p>
      </div>
    </div>

    <div class="tarjeta">
      <img src="{{ asset ('assets/img/agri-2.jpeg')}}" alt="Curso HTML">
      <div class="overlay">
        <p>Cada nivel está guiado por un dios/diosa mesoamericano (ej. Tlaloc, Xochipilli, Tezcatlipoca), reforzando el contexto cultural y el aprendizaje ecológico.</p>
      </div>
    </div>

    <div class="tarjeta">
      <img src="{{ asset ('assets/img/agri-3.jpeg')}}" alt="Curso GSAP">
      <div class="overlay">
        <p>Sumérgete en tres zonas representativas de México: Zona Árida, Zona Húmeda y Zona Semi Húmeda.</p>
      </div>
    </div>

    <div class="tarjeta">
      <img src="{{ asset ('assets/img/agri-4.jpeg')}}" alt="Curso Tailwind">
      <div class="overlay">
        <p>Fomenta habilidades en ciencia, tecnología, ecología y cultura ancestral de manera interactiva y motivadora.</p>
      </div>
    </div>
  </div>
  </section>

    <!-- PREGUNTAS FRECUENTES -->
  <section class="body-quest" id="faqs">
    <section class="faq-section">
    <h2>Preguntas frecuentes</h2>
<!-- START Q1 -->
    <div class="faq-item">
      <button class="faq-question">
        ¿Qué es AgriGuardians?
        <div class="arrow-circle">
          <svg class="arrow" width="16" height="16" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </button>
      <div class="faq-answer">
        Es un videojuego educativo interactivo que enseña técnicas de agricultura sostenible a través de una experiencia gamificada inspirada en culturas prehispánicas.
      </div>
    </div>
<!-- END Q1 -->

<!-- START Q2 -->
    <div class="faq-item">
      <button class="faq-question">
        ¿Qué edades pueden jugar AgriGuardians?
        <div class="arrow-circle">
          <svg class="arrow" width="16" height="16" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </button>
      <div class="faq-answer">
        Está diseñado principalmente para jóvenes de entre 12 y 21 años, aunque cualquier persona interesada puede jugarlo.
      </div>
    </div>
<!-- END Q2 -->

<!-- START Q3 -->
    <div class="faq-item">
      <button class="faq-question">
        ¿Necesito conocimientos previos en agricultura?
        <div class="arrow-circle">
          <svg class="arrow" width="16" height="16" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </button>
      <div class="faq-answer">
        No, el juego está diseñado para enseñarte desde lo más básico hasta técnicas más avanzadas según tu nivel.
      </div>
    </div>
<!-- END Q3 -->

<!-- START Q4 -->
    <div class="faq-item">
      <button class="faq-question">
        ¿Qué son las zonas Árida, Húmeda y Semi-Húmeda?
        <div class="arrow-circle">
          <svg class="arrow" width="16" height="16" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </button>
      <div class="faq-answer">
        Representan distintos entornos climáticos donde aprenderás técnicas agrícolas específicas adaptadas a cada uno.
      </div>
    </div>
<!-- END Q4 -->

<!-- START Q5 -->
    <div class="faq-item">
      <button class="faq-question">
        ¿Qué papel juegan los dioses prehispánicos en el juego?
        <div class="arrow-circle">
          <svg class="arrow" width="16" height="16" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </button>
      <div class="faq-answer">
        Actúan como guías temáticos que enseñan valores ecológicos y prácticas agrícolas ancestrales según la zona.
      </div>
    </div>
<!-- END Q5 -->

<!-- START Q6 -->
    <div class="faq-item">
      <button class="faq-question">
        ¿El juego tiene un enfoque educativo real?
        <div class="arrow-circle">
          <svg class="arrow" width="16" height="16" viewBox="0 0 24 24" fill="none">
            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </button>
      <div class="faq-answer">
        Sí, el contenido está basado en investigaciones sobre agricultura prehispánica y adaptado al contexto actual.
      </div>
    </div>
<!-- END Q6 -->
  </section>
  </section>


@endsection
