@extends('sitio.layout.principal')
@section('contenido')
  <div class="faq-section main-since">

    <h2 class="fqs">Preguntas Frecuentes</h2>

    <div class="faq-item" onclick="toggleFAQ(this)">
      ¿Qué es AgriGuardians?
      <div class="faq-answer">
        Es un videojuego educativo interactivo que enseña técnicas de agricultura sostenible a través de una experiencia gamificada inspirada en culturas prehispánicas.
      </div>
    </div>

    <div class="faq-item" onclick="toggleFAQ(this)">
      ¿Qué edades pueden jugar AgriGuardians?
      <div class="faq-answer">
        Está diseñado principalmente para jóvenes de entre 12 y 21 años, aunque cualquier persona interesada puede jugarlo.
      </div>
    </div>

    <div class="faq-item" onclick="toggleFAQ(this)">
      ¿Necesito conocimientos previos en agricultura?
      <div class="faq-answer">
        No, el juego está diseñado para enseñarte desde lo más básico hasta técnicas más avanzadas según tu nivel.
    </div>
  </div>

  <div class="faq-item" onclick="toggleFAQ(this)">
    ¿En qué dispositivos puedo jugar AgriGuardians?
    <div class="faq-answer">
      Actualmente está disponible para computadoras con sistema Windows, y próximamente para Android.
    </div>
  </div>

  <div class="faq-item" onclick="toggleFAQ(this)">
    ¿Qué son las zonas Árida, Húmeda y Semi-Húmeda?
    <div class="faq-answer">
      Representan distintos entornos climáticos donde aprenderás técnicas agrícolas específicas adaptadas a cada uno.
    </div>
  </div>

  <div class="faq-item" onclick="toggleFAQ(this)">
    ¿Qué papel juegan los dioses prehispánicos en el juego?
    <div class="faq-answer">
      Actúan como guías temáticos que enseñan valores ecológicos y prácticas agrícolas ancestrales según la zona.
    </div>
  </div>

  <div class="faq-item" onclick="toggleFAQ(this)">
    ¿El juego tiene un enfoque educativo real?
    <div class="faq-answer">
      Sí, el contenido está basado en investigaciones sobre agricultura prehispánica y adaptado al contexto actual.
    </div>
  </div>

<br>
<br>
@endsection
