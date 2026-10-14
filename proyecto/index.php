<!DOCTYPE html>
<html lang="es">
<head>
  <title>ProgramacionWeb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  * {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
  overflow-y: auto;
  scroll-behavior: smooth;
}

/* Small responsive fix */
@media (max-width: 768px) {
  .tab, .tabcontent { width: 100%; float: none; height: auto; }
}

/* Estilos para la "página" de Ejercicios */
.tab-ejercicios {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

.tab-ejercicios button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

.tab-ejercicios button:hover {
  background-color: #ddd;
}

.tab-ejercicios button.active {
  background-color: #ccc;
}

.tabcontent-ejercicios {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
  overflow-y: auto;
}

@media (max-width: 768px) {
  .tab-ejercicios, .tabcontent-ejercicios { width: 100%; float: none; height: auto; }
}

/* Estilos del formulario dentro del modal (adaptados del código que enviaste) */
#formModal .modal-body,
#loginModal .modal-body {
  background-color: white;
  padding: 0;
}

.form-container {
  padding: 16px;
  background-color: white;
}

.form-container input[type=text],
.form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  box-sizing: border-box;
}

.form-container input[type=text]:focus,
.form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.form-container .registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.form-container .registerbtn:hover {
  opacity: 1;
}

.form-container a {
  color: dodgerblue;
}

.form-signin {
  background-color: #f1f1f1;
  text-align: center;
  padding: 16px;
}

/* Contenedor de la imagen de cada subtema */
.topic-img {
  background-color: #f8f9fa;
  border: 1px solid #dee2e6;
  border-radius: 6px;
  padding: 14px;
  min-height: 110px;
}

/* Video más pequeño (en vez de ocupar todo el ancho del panel) */
.video-chica {
  max-width: 320px;
}
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>Facultad de Ingeniería Mecánica y Eléctrica</h1>
  <p>Ingeniería en Computación Inteligente</p> 
  <p>Jesus Eduardo Fuentes Huerta</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#" onclick="mostrarPagina(event, 'paginaPrincipal')" id="navPrincipal">Programación Web</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="mostrarPagina(event, 'paginaEjercicios')" id="navEjercicios">Ejercicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5" id="paginaPrincipal">
  <div class="row">
    <h2>Ingeniería en Computación Inteligente</h2>
    <p> Programación Web</p>

    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Unidad 1</button>
      <button class="tablinks" onclick="openCity(event, 'Paris')">Unidad 2</button>
      <button class="tablinks" onclick="openCity(event, 'Tokyo')">Unidad 3</button>
    </div>

    <div id="London" class="tabcontent">
      <section id="listatemas"> 
        <h2>Unidad 1</h2>
        <p> Lenguajes de programación y de etiquetas para creación de páginas web</p>

        <ul>
          <li><a href="#tema1">1.1. Lenguajes de Marcado</a></li>
          <li><a href="#tema2">1.2. Lenguajes de Estilo</a></li>
          <li><a href="#tema3">1.3. Lenguajes de Programación del Lado del Cliente</a></li>
          <li><a href="#tema4">1.4. Lenguajes de Programación del Lado del Servidor</a></li>
          <li><a href="#tema5">1.5. Tecnologías de Diseño Web Responsivo</a></li>
          <li><a href="#tema6">1.6. Integración de APIs y Servicios Web</a></li>
        </ul>
      </section>

      <section id="tema1">
        <div class="topic-img d-flex align-items-center justify-content-center">
          <img src="https://cdn.simpleicons.org/html5/E34F26" alt="Logo de HTML5" height="90">
        </div>
        <pre>
1.1. Lenguajes de Marcado
¿Qué es un lenguaje de marcado?
Un lenguaje de marcado permite definir la estructura y organización de la información mediante etiquetas o elementos.
En desarrollo web, el lenguaje de marcado fundamental es:
HTML — HyperText Markup Language
HTML no es propiamente un lenguaje de programación, porque no utiliza estructuras de control tradicionales como:
if
while
for
Su función principal es estructurar el contenido.

El navegador interpreta este código y construye la representación visual de la página.
Elementos HTML
HTML está compuesto principalmente por elementos.
Esto es importante porque permite construir documentos más organizados y facilita aspectos como accesibilidad y SEO.
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/10GHKjgQIR0" title="¿Qué es HTML?" allowfullscreen></iframe>
        </div>
        <a href="#listatemas" class="volver">Regresar a lista de temas</a>
      </section>

      <section id="tema2">
        <div class="topic-img d-flex align-items-center justify-content-center">
          <img src="https://cdn.simpleicons.org/css3/1572B6" alt="Logo de CSS3" height="90">
        </div>
        <pre>
1.2. Lenguajes de Estilo
Una vez que HTML proporciona la estructura, necesitamos definir cómo se verá la página.
Para ello utilizamos principalmente:
CSS — Cascading Style Sheets

CSS permite controlar:
- Colores
- Tipografías
- Tamaños
- Márgenes
- Espaciado
- Bordes
- Fondos
- Posicionamiento
- Animaciones
- Transiciones
- Diseño responsivo

Modelo de caja — Box Model
Content, Padding, Border, Margin

CSS moderno: Flexbox y Grid para layout.
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/hrxjBqZWsb0" title="¿Qué es CSS?" allowfullscreen></iframe>
        </div>
        <a href="#listatemas" class="volver">Regresar a lista de temas</a>
      </section>

      <section id="tema3">
        <div class="topic-img d-flex align-items-center justify-content-center">
          <img src="https://cdn.simpleicons.org/javascript/F7DF1E" alt="Logo de JavaScript" height="90">
        </div>
        <pre>
1.3. Lenguajes de Programación del Lado del Cliente
Los lenguajes del lado del cliente se ejecutan en el navegador del usuario.
El más importante es:
JavaScript — lenguaje de scripting para la web.

Funciones principales:
- Manipular el DOM (cambiar contenido y estructura en tiempo real).
- Manejar eventos (click, submit, teclado).
- Validación de formularios en el cliente.
- Realizar peticiones asíncronas (AJAX / fetch) para actualizar partes de la página sin recargar.

Librerías y frameworks comunes:
- jQuery (simplifica DOM y AJAX)
- React, Vue, Angular (componentes y SPA)
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/riZbwRFMFuw" title="¿Qué es JavaScript?" allowfullscreen></iframe>
        </div>
        <a href="#listatemas" class="volver">Regresar a lista de temas</a>
      </section>

      <section id="tema4">
        <div class="topic-img d-flex align-items-center justify-content-center gap-3">
          <img src="https://cdn.simpleicons.org/php/777BB4" alt="Logo de PHP" height="70">
          <img src="https://cdn.simpleicons.org/nodedotjs/339933" alt="Logo de Node.js" height="70">
          <img src="https://cdn.simpleicons.org/python/3776AB" alt="Logo de Python" height="70">
        </div>
        <pre>
1.4. Lenguajes de Programación del Lado del Servidor
Se ejecutan en el servidor y generan respuestas para el cliente.
Lenguajes y entornos comunes:
- PHP: ampliamente usado para páginas dinámicas y CMS (WordPress).
- Python (con frameworks como Django, Flask).
- Node.js (JavaScript en servidor; permite usar JS en todo el stack).
- Java (Spring), C# (ASP.NET).

Responsabilidades del servidor:
- Procesar formularios y lógica de negocio.
- Acceder y gestionar bases de datos.
- Autenticación y autorización.
- Generar HTML o APIs (JSON) para el cliente.
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/ykGRYEX0n60" title="¿Qué es PHP?" allowfullscreen></iframe>
        </div>
        <a href="#listatemas" class="volver">Regresar a lista de temas</a>
      </section>

      <section id="tema5">
        <div class="topic-img d-flex align-items-center justify-content-center">
          <svg width="220" height="110" viewBox="0 0 220 110" xmlns="http://www.w3.org/2000/svg">
            <rect x="5" y="10" width="120" height="80" rx="4" fill="#0d6efd"/>
            <rect x="12" y="17" width="106" height="58" fill="#ffffff"/>
            <rect x="55" y="94" width="20" height="6" fill="#0d6efd"/>
            <rect x="140" y="30" width="45" height="65" rx="4" fill="#6610f2"/>
            <rect x="145" y="36" width="35" height="48" fill="#ffffff"/>
            <circle cx="162.5" cy="90" r="2.5" fill="#ffffff"/>
            <rect x="192" y="45" width="22" height="45" rx="3" fill="#20c997"/>
            <rect x="195" y="50" width="16" height="32" fill="#ffffff"/>
          </svg>
        </div>
        <pre>
1.5. Tecnologías de Diseño Web Responsivo
El diseño responsivo adapta la interfaz a distintos tamaños de pantalla.
Técnicas y herramientas:
- Media queries en CSS (@media).
- Unidades relativas (%, em, rem, vw, vh).
- Flexbox y CSS Grid para layouts flexibles.
- Imágenes responsivas (srcset, picture).
- Mobile-first: diseñar pensando primero en móviles.

Objetivo: buena experiencia en móviles, tablets y escritorios.
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/aZpkOgByAYM" title="Diseño responsivo con Media Queries" allowfullscreen></iframe>
        </div>
        <a href="#listatemas" class="volver">Regresar a lista de temas</a>
      </section>

      <section id="tema6">
        <div class="topic-img d-flex align-items-center justify-content-center">
          <svg width="220" height="100" viewBox="0 0 220 100" xmlns="http://www.w3.org/2000/svg">
            <rect x="5" y="25" width="60" height="50" rx="6" fill="#0d6efd"/>
            <text x="35" y="55" font-size="12" fill="#fff" text-anchor="middle" font-family="Arial">Cliente</text>
            <rect x="80" y="35" width="60" height="30" rx="6" fill="#fd7e14"/>
            <text x="110" y="55" font-size="11" fill="#fff" text-anchor="middle" font-family="Arial">API</text>
            <rect x="155" y="25" width="60" height="50" rx="6" fill="#198754"/>
            <text x="185" y="55" font-size="12" fill="#fff" text-anchor="middle" font-family="Arial">Servidor</text>
            <line x1="65" y1="50" x2="80" y2="50" stroke="#333" stroke-width="2" marker-end="url(#arrow)"/>
            <line x1="140" y1="50" x2="155" y2="50" stroke="#333" stroke-width="2" marker-end="url(#arrow)"/>
            <defs>
              <marker id="arrow" markerWidth="8" markerHeight="8" refX="6" refY="3" orient="auto">
                <path d="M0,0 L6,3 L0,6 Z" fill="#333"/>
              </marker>
            </defs>
          </svg>
        </div>
        <pre>
1.6. Integración de APIs y Servicios Web
Las APIs permiten comunicar la aplicación con servicios externos.
Conceptos clave:
- REST: arquitectura basada en recursos y verbos HTTP (GET, POST, PUT, DELETE).
- JSON: formato de intercambio de datos más usado.
- Autenticación: tokens (JWT), API keys, OAuth.
- Consumo desde cliente: fetch, axios; desde servidor: librerías HTTP.

Ejemplos de uso:
- Obtener datos de un servicio externo (clima, mapas).
- Enviar pagos, autenticación social, almacenamiento en la nube.
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/LQdJG8Qc5xo" title="¿Qué es una REST API?" allowfullscreen></iframe>
        </div>
        <a href="#listatemas" class="volver">Regresar a lista de temas</a>
      </section>
    </div>

    <div id="Paris" class="tabcontent" style="display:none;">
      <section id="listatemas2">
        <h2>Unidad 2</h2>
        <p> Marcos de trabajo para el desarrollo de páginas web</p>

        <ul>
          <li><a href="#tema2_1">2.1. Introducción a los Frameworks Web</a></li>
          <li><a href="#tema2_2">2.2. Frameworks Frontend</a></li>
          <li><a href="#tema2_3">2.3. Frameworks JavaScript Frontend</a></li>
          <li><a href="#tema2_4">2.4. Frameworks Backend</a></li>
          <li><a href="#tema2_5">2.5. Patrones de Diseño en Frameworks Web</a></li>
          <li><a href="#tema2_6">2.6. Despliegue y Gestión de Proyectos en Frameworks Web</a></li>
        </ul>
      </section>

      <section id="tema2_1">
        <div class="topic-img d-flex align-items-center justify-content-center">
          <svg width="130" height="110" viewBox="0 0 130 110" xmlns="http://www.w3.org/2000/svg">
            <circle cx="65" cy="55" r="34" fill="none" stroke="#6c757d" stroke-width="10"/>
            <circle cx="65" cy="20" r="8" fill="#6c757d"/>
            <circle cx="65" cy="90" r="8" fill="#6c757d"/>
            <circle cx="30" cy="55" r="8" fill="#6c757d"/>
            <circle cx="100" cy="55" r="8" fill="#6c757d"/>
            <circle cx="65" cy="55" r="14" fill="#0d6efd"/>
          </svg>
        </div>
        <pre>
2.1. Introducción a los Frameworks Web
¿Qué es un framework?
Un framework es un conjunto de herramientas, librerías y reglas que facilitan y aceleran el desarrollo de aplicaciones,
proporcionando una estructura base ya definida.

Ventajas de usar un framework:
- Ahorro de tiempo al reutilizar código y componentes ya probados.
- Buenas prácticas y organización estandarizada del proyecto.
- Mayor seguridad, al basarse en soluciones ya revisadas por una comunidad.
- Facilidad de mantenimiento y escalabilidad.

Clasificación general:
- Frameworks Frontend (interfaz de usuario).
- Frameworks Backend (lógica del servidor).
- Frameworks Fullstack (ambos lados).
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/xmHwYc-6W3E" title="¿Qué es un framework?" allowfullscreen></iframe>
        </div>
        <a href="#listatemas2" class="volver">Regresar a lista de temas</a>
      </section>

      <section id="tema2_2">
        <div class="topic-img d-flex align-items-center justify-content-center">
          <img src="https://cdn.simpleicons.org/bootstrap/7952B3" alt="Logo de Bootstrap" height="90">
        </div>
        <pre>
2.2. Frameworks Frontend
Los frameworks frontend se enfocan en la construcción de la interfaz visual y la experiencia del usuario.
Suelen basarse en HTML, CSS y JavaScript, aportando componentes reutilizables y un sistema de estilos consistente.

Ejemplos comunes:
- Bootstrap: sistema de grillas y componentes prediseñados (botones, formularios, navegación).
- Tailwind CSS: enfoque basado en utilidades para construir diseños personalizados.
- Materialize / Bulma: alternativas con estilos propios y componentes listos para usar.

Beneficios:
- Diseño responsivo desde el inicio.
- Consistencia visual entre distintas páginas.
- Reducción del tiempo dedicado a maquetación.
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/fY_O1Fb-e5Y" title="¿Qué es Bootstrap?" allowfullscreen></iframe>
        </div>
        <a href="#listatemas2" class="volver">Regresar a lista de temas</a>
      </section>

      <section id="tema2_3">
        <div class="topic-img d-flex align-items-center justify-content-center gap-3">
          <img src="https://cdn.simpleicons.org/react/61DAFB" alt="Logo de React" height="70">
          <img src="https://cdn.simpleicons.org/vuedotjs/4FC08D" alt="Logo de Vue.js" height="70">
          <img src="https://cdn.simpleicons.org/angular/DD0031" alt="Logo de Angular" height="70">
        </div>
        <pre>
2.3. Frameworks JavaScript Frontend
Estos frameworks permiten construir interfaces dinámicas e interactivas mediante componentes y manejo de estado.

Principales frameworks/librerías:
- React: librería basada en componentes y DOM virtual, mantenida por Meta.
- Angular: framework completo orientado a aplicaciones empresariales (usa TypeScript).
- Vue.js: framework progresivo, fácil de integrar y con curva de aprendizaje suave.

Características comunes:
- Componentes reutilizables.
- Enlace de datos (data binding).
- Manejo de estado y eventos de manera eficiente.
- Ideales para Single Page Applications (SPA).
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/IxG7UuFCxKI" title="React vs Angular vs Vue" allowfullscreen></iframe>
        </div>
        <a href="#listatemas2" class="volver">Regresar a lista de temas</a>
      </section>

      <section id="tema2_4">
        <div class="topic-img d-flex align-items-center justify-content-center gap-3">
          <img src="https://cdn.simpleicons.org/laravel/FF2D20" alt="Logo de Laravel" height="70">
          <img src="https://cdn.simpleicons.org/django/092E20" alt="Logo de Django" height="70">
          <img src="https://cdn.simpleicons.org/express/000000" alt="Logo de Express" height="70">
        </div>
        <pre>
2.4. Frameworks Backend
Los frameworks backend facilitan la creación de la lógica del servidor, el acceso a bases de datos y la generación de APIs.

Ejemplos por lenguaje:
- PHP: Laravel, Symfony.
- Python: Django, Flask.
- JavaScript/Node.js: Express, NestJS.
- Java: Spring Boot.
- C#: ASP.NET Core.

Funciones principales:
- Enrutamiento de peticiones (routing).
- Conexión y manejo de bases de datos (ORM).
- Autenticación y seguridad.
- Generación de APIs REST o GraphQL.
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/I7X3R57vdIk" title="¿Qué es Laravel?" allowfullscreen></iframe>
        </div>
        <a href="#listatemas2" class="volver">Regresar a lista de temas</a>
      </section>

      <section id="tema2_5">
        <div class="topic-img d-flex align-items-center justify-content-center">
          <svg width="230" height="100" viewBox="0 0 230 100" xmlns="http://www.w3.org/2000/svg">
            <rect x="5" y="30" width="65" height="40" rx="6" fill="#0d6efd"/>
            <text x="37" y="54" font-size="12" fill="#fff" text-anchor="middle" font-family="Arial">Modelo</text>
            <rect x="85" y="5" width="65" height="40" rx="6" fill="#198754"/>
            <text x="117" y="29" font-size="12" fill="#fff" text-anchor="middle" font-family="Arial">Vista</text>
            <rect x="85" y="55" width="65" height="40" rx="6" fill="#fd7e14"/>
            <text x="117" y="79" font-size="11" fill="#fff" text-anchor="middle" font-family="Arial">Controlador</text>
            <line x1="70" y1="50" x2="85" y2="25" stroke="#333" stroke-width="2"/>
            <line x1="70" y1="50" x2="85" y2="75" stroke="#333" stroke-width="2"/>
            <line x1="150" y1="25" x2="165" y2="50" stroke="#333" stroke-width="2"/>
            <line x1="150" y1="75" x2="165" y2="50" stroke="#333" stroke-width="2"/>
          </svg>
        </div>
        <pre>
2.5. Patrones de Diseño en Frameworks Web
Los patrones de diseño son soluciones probadas a problemas comunes en el desarrollo de software.
La mayoría de los frameworks se apoyan en alguno de estos patrones para organizar el código.

Patrones más utilizados:
- MVC (Modelo-Vista-Controlador): separa datos, lógica y presentación.
- MVVM (Modelo-Vista-Vista Modelo): usado en frameworks como Angular y Vue.
- Componentes: unidades reutilizables de interfaz (React, Vue).
- Singleton, Factory, Observer: patrones generales usados dentro de la arquitectura interna de los frameworks.

Beneficios:
- Código más organizado y mantenible.
- Facilita el trabajo en equipo.
- Escalabilidad del proyecto a largo plazo.
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/ANQDmqBYwns" title="¿Qué es el patrón MVC?" allowfullscreen></iframe>
        </div>
        <a href="#listatemas2" class="volver">Regresar a lista de temas</a>
      </section>

      <section id="tema2_6">
        <div class="topic-img d-flex align-items-center justify-content-center gap-3">
          <img src="https://cdn.simpleicons.org/docker/2496ED" alt="Logo de Docker" height="80">
          <img src="https://cdn.simpleicons.org/git/F05032" alt="Logo de Git" height="80">
        </div>
        <pre>
2.6. Despliegue y Gestión de Proyectos en Frameworks Web
Una vez desarrollada la aplicación, es necesario ponerla en producción y gestionarla adecuadamente.

Aspectos clave del despliegue:
- Control de versiones: Git y plataformas como GitHub o GitLab.
- Empaquetado y compilación: herramientas como Webpack, Vite.
- Contenedores: Docker para asegurar entornos consistentes.
- Servicios de hosting/despliegue: Vercel, Netlify, Heroku, servidores propios.

Gestión de proyectos:
- Uso de gestores de paquetes (npm, yarn, composer).
- Integración continua y despliegue continuo (CI/CD).
- Documentación y control de calidad del código.
        </pre>
        <div class="ratio ratio-16x9 my-3 mx-auto video-chica">
          <iframe src="https://www.youtube.com/embed/amd_gWm-Wj0" title="Despliegue de aplicaciones CI/CD" allowfullscreen></iframe>
        </div>
        <a href="#listatemas2" class="volver">Regresar a lista de temas</a>
      </section>
    </div>

    <div id="Tokyo" class="tabcontent" style="display:none;">
      <h3>Unidad 3</h3>
      <p>Contenido de la Unidad 3 (ejemplo).</p>
    </div>

  </div>
</div>

<!-- Página de Ejercicios (oculta por defecto) -->
<div class="container mt-5" id="paginaEjercicios" style="display:none;">
  <div class="row">
    <h2>Ejercicios</h2>
    <p>Evidencias y ejercicios entregados durante el curso</p>

    <div class="tab-ejercicios">
      <button class="tablinks-ejercicios" onclick="openExamen(event, 'Parcial1')" id="defaultOpenEjercicios">Parcial 1</button>
      <button class="tablinks-ejercicios" onclick="openExamen(event, 'Parcial2')">Parcial 2</button>
      <button class="tablinks-ejercicios" onclick="openExamen(event, 'Ordinario')">Ordinario</button>
    </div>

    <div id="Parcial1" class="tabcontent-ejercicios">
      <h3>Parcial 1</h3>
      <p>Ejercicios y evidencias correspondientes al Parcial 1.</p>
      <ul>
        <li><a href="#" data-bs-toggle="modal" data-bs-target="#formModal">Ejercicio 1</a></li>
        <li><a href="https://jesusef.infinityfree.me/programacionweb/EnlacesE.html" target="_blank">Ejercicio 2</a></li>
        <li><a href="https://jesusef.infinityfree.me/programacionweb/primerpagina.html" target="_blank">Ejercicio 3</a></li>
      </ul>
    </div>

    <div id="Parcial2" class="tabcontent-ejercicios" style="display:none;">
      <h3>Parcial 2</h3>
      <p>Ejercicios y evidencias correspondientes al Parcial 2.</p>
      <ul>
        <li><a href="#" target="_blank">Ejercicio 1</a></li>
        <li><a href="#" target="_blank">Ejercicio 2</a></li>
        <li><a href="#" target="_blank">Ejercicio 3</a></li>
      </ul>
    </div>

    <div id="Ordinario" class="tabcontent-ejercicios" style="display:none;">
      <h3>Ordinario</h3>
      <p>Ejercicios y evidencias correspondientes al examen Ordinario.</p>
      <ul>
        <li><a href="#" target="_blank">Ejercicio 1</a></li>
        <li><a href="#" target="_blank">Ejercicio 2</a></li>
        <li><a href="#" target="_blank">Ejercicio 3</a></li>
      </ul>
    </div>

  </div>
</div>

<!-- Modal con el formulario de Registro (Ejercicio 1 - Parcial 1) -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Ejercicio 1 - Formulario de Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form onsubmit="return false;">
          <div class="form-container">
            <h1>Registro</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="name1"><b>Nombre completo</b></label>
            <input type="text" placeholder="Nombre completo" name="name1" id="name1" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button type="submit" class="registerbtn">Register</button>
          </div>

          <div class="form-signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal de Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="sistema/index.php" method="post">
          <input type="hidden" name="acceso" value="1">

          <div class="form-container">
            <label for="usuario"><b>Usuario</b></label>
            <input type="text" placeholder="Ingrese usuario" name="usuario" id="usuario" required>

            <label for="loginpsw"><b>Password</b></label>
            <input type="password" placeholder="Ingrese password" name="psw" id="loginpsw" required>

            <button type="submit" class="registerbtn">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
/* Alternar entre la página principal y la de Ejercicios */
function mostrarPagina(evt, idPagina) {
  evt.preventDefault();

  document.getElementById('paginaPrincipal').style.display = 'none';
  document.getElementById('paginaEjercicios').style.display = 'none';

  document.getElementById(idPagina).style.display = 'block';

  document.getElementById('navPrincipal').classList.remove('active');
  document.getElementById('navEjercicios').classList.remove('active');
  evt.currentTarget.classList.add('active');
}

function openExamen(evt, examName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent-ejercicios");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks-ejercicios");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(examName).style.display = "block";
  evt.currentTarget.className += " active";
}

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Hacer que el primer tab se abra al cargar
document.getElementById("defaultOpen").click();

/* Manejar desplazamiento dentro del panel de la unidad 1
   Intercepta los enlaces a #temaX y realiza scroll dentro del contenedor #London
*/
(function() {
  const container = document.getElementById('London');
  if (!container) return;

  // Delegación: capturar clicks en enlaces que apunten a anclas internas
  container.addEventListener('click', function(e) {
    const target = e.target;
    if (target.tagName.toLowerCase() !== 'a') return;
    const href = target.getAttribute('href') || '';
    if (!href.startsWith('#')) return;

    const id = href.slice(1);
    const dest = document.getElementById(id);
    if (!dest) return;

    // Evitar comportamiento por defecto (salto de página)
    e.preventDefault();

    // Calcular posición relativa dentro del contenedor y desplazarlo suavemente
    // offsetTop es relativo al offsetParent; ajustamos con scrollTop
    const containerTop = container.getBoundingClientRect().top;
    const destTop = dest.getBoundingClientRect().top;
    const currentScroll = container.scrollTop;
    const offset = destTop - containerTop + currentScroll;

    container.scrollTo({ top: offset, behavior: 'smooth' });
  });

  // Opcional: cuando se abre otra pestaña, resetear scroll del contenedor
  const tabButtons = document.querySelectorAll('.tablinks');
  tabButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      // Si abrimos Unidad 1, no hacer nada; si cerramos, opcionalmente resetear
      // Aquí dejamos el comportamiento por defecto
    });
  });
})();

/* Mismo comportamiento de scroll interno pero para el panel de la Unidad 2 (#Paris) */
(function() {
  const container = document.getElementById('Paris');
  if (!container) return;

  container.addEventListener('click', function(e) {
    const target = e.target;
    if (target.tagName.toLowerCase() !== 'a') return;
    const href = target.getAttribute('href') || '';
    if (!href.startsWith('#')) return;

    const id = href.slice(1);
    const dest = document.getElementById(id);
    if (!dest) return;

    e.preventDefault();

    const containerTop = container.getBoundingClientRect().top;
    const destTop = dest.getBoundingClientRect().top;
    const currentScroll = container.scrollTop;
    const offset = destTop - containerTop + currentScroll;

    container.scrollTo({ top: offset, behavior: 'smooth' });
  });
})();
</script>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>