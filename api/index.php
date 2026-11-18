<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Proyectos, pasantía y experiencia académica de Jean Pierre Jara Espinoza, estudiante de Ingeniería de Sistemas e Informática en la UNS.">
  <meta name="author" content="Jean Pierre Alfredo Jara Espinoza">
  <title>Bitácora Universitaria | Jean Pierre Jara Espinoza</title>
  <style>
    :root {
      --red: #b50925;
      --dark-red: #88061c;
      --ink: #191b20;
      --muted: #495260;
      --paper: #f4f5f7;
      --border: #dde0e5;
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      color: var(--ink);
      background: var(--paper);
      font: 1rem/1.55 system-ui, sans-serif;
    }

    a:focus-visible {
      outline: 2px solid currentColor;
      outline-offset: 3px;
    }

    .container {
      width: min(100% - 2rem, 70rem);
      margin-inline: auto;
    }

    .topbar {
      padding: .45rem 0;
      color: #fff;
      background: var(--ink);
      font-size: .85rem;
    }

    .site-header {
      padding: 1.15rem 0;
      background: #fff;
    }

    .brand {
      display: inline-block;
      color: var(--red);
      font-size: clamp(1.45rem, 4vw, 2.1rem);
      font-weight: 900;
      line-height: 1.15;
      text-decoration: none;
      text-transform: uppercase;
    }

    .subtitle {
      margin: .3rem 0 0;
      color: var(--muted);
      font-size: .93rem;
    }

    .navigation { background: var(--red); }

    .navigation ul {
      display: flex;
      flex-wrap: wrap;
      gap: .15rem 1rem;
      margin-block: 0;
      padding-block: .25rem;
      padding-inline-start: 0;
      list-style: none;
    }

    .navigation a {
      display: block;
      padding: .45rem .2rem;
      color: #fff;
      font-size: .9rem;
      font-weight: 700;
      text-decoration: none;
    }

    .navigation a:hover { text-decoration: underline; }

    .hero {
      margin-block: 1.4rem 1.75rem;
      padding: clamp(1.25rem, 4vw, 2.5rem);
      color: #fff;
      background: linear-gradient(135deg, var(--ink), #2f333d);
      border-inline-start: 6px solid var(--red);
      border-radius: .4rem;
    }

    h1, h3 { font-family: Georgia, serif; }

    h1 {
      margin: 0 0 .6rem;
      font-size: clamp(1.9rem, 5vw, 3rem);
      line-height: 1.13;
    }

    .hero p {
      max-width: 62ch;
      margin: 0;
      color: #e4e7ed;
    }

    .section-title {
      margin: 1.65rem 0 .85rem;
      padding-inline-start: .65rem;
      border-inline-start: 4px solid var(--red);
      font-size: 1.2rem;
      line-height: 1.35;
    }

    .card-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 1rem;
    }

    .card {
      padding: 1.15rem;
      background: #fff;
      border: 1px solid var(--border);
      border-block-start: 3px solid var(--red);
      border-radius: .35rem;
    }

    .category {
      margin: 0 0 .35rem;
      color: var(--dark-red);
      font-size: .78rem;
      font-weight: 800;
      letter-spacing: .035em;
      text-transform: uppercase;
    }

    .card h3 {
      margin: 0 0 .45rem;
      font-size: 1.25rem;
      line-height: 1.3;
    }

    .summary {
      margin: 0;
      color: var(--muted);
    }

    .site-footer {
      margin-block-start: 2.5rem;
      padding: 1.3rem 0;
      color: #fff;
      background: var(--ink);
      border-block-start: 4px solid var(--red);
    }

    .site-footer p { margin: 0 0 .35rem; }
    .site-footer a { color: inherit; text-underline-offset: .2em; }

    @media (max-width: 40rem) {
      .card-grid { grid-template-columns: minmax(0, 1fr); }
    }
  </style>
</head>
<body id="inicio">
  <div class="topbar">
    <div class="container">Edición 2026 · Chimbote, Áncash</div>
  </div>

  <header class="site-header">
    <div class="container">
      <a class="brand" href="#inicio">Bitácora Universitaria</a>
      <p class="subtitle">Universidad Nacional del Santa · Ingeniería de Sistemas e Informática</p>
    </div>
  </header>

  <nav class="navigation" aria-label="Secciones de la página">
    <ul class="container">
      <li><a href="#portada">Portada</a></li>
      <li><a href="#proyectos">Proyectos</a></li>
      <li><a href="#experiencia">Experiencia</a></li>
      <li><a href="#tecnologia">Datos y tecnología</a></li>
    </ul>
  </nav>

  <main class="container" id="portada">
    <section class="hero" aria-labelledby="nombre">
      <h1 id="nombre">Jean Pierre Jara Espinoza</h1>
      <p>Soy estudiante de Ingeniería de Sistemas e Informática en la Universidad Nacional del Santa. Me interesan el análisis de datos y la gestión de proyectos de TI. Aquí comparto los proyectos en los que he participado y lo que he aprendido durante mi formación.</p>
    </section>

    <section aria-labelledby="proyectos">
      <h2 class="section-title" id="proyectos">Proyectos</h2>
      <div class="card-grid">
        <article class="card">
          <p class="category">Desarrollo móvil · Visión por computadora</p>
          <h3>PetPoint, una app para buscar mascotas perdidas</h3>
          <p class="summary">Con mi equipo desarrollé una aplicación Android para reportar mascotas perdidas o encontradas. Mi aporte se centró en integrar el sistema que compara las fotos de distintos reportes para sugerir posibles coincidencias.</p>
        </article>
        <article class="card">
          <p class="category">Hackatón · Seguridad ciudadana</p>
          <h3>Alerta Albarracina en TransformaGob 2026</h3>
          <p class="summary">Participé en el desarrollo de un prototipo de seguridad ciudadana. Trabajamos en equipo para definir el problema, priorizar las funciones y presentar una solución centrada en los usuarios.</p>
        </article>
      </div>
    </section>

    <section aria-labelledby="experiencia">
      <h2 class="section-title" id="experiencia">Experiencia</h2>
      <div class="card-grid">
        <article class="card">
          <p class="category">Pasantía nacional · Arequipa</p>
          <h3>Cuestionarios académicos con IA generativa</h3>
          <p class="summary">Durante mi pasantía en la Universidad Nacional de San Agustín de Arequipa, participé en un proyecto para ayudar a los docentes a generar cuestionarios a partir de sílabos y otros materiales académicos.</p>
        </article>
        <article class="card">
          <p class="category">Prácticas preprofesionales · UGEL Santa</p>
          <h3>Gestión de resoluciones y seguimiento de expedientes</h3>
          <p class="summary">Apoyé en el registro y la consulta de resoluciones docentes en el sistema institucional. También orienté a docentes en la entrega de resoluciones y realicé el seguimiento de expedientes.</p>
        </article>
      </div>
    </section>

    <section aria-labelledby="tecnologia">
      <h2 class="section-title" id="tecnologia">Datos y tecnología</h2>
      <div class="card-grid">
        <article class="card">
          <p class="category">Análisis de datos</p>
          <h3>Excel, SQL y Power BI</h3>
          <p class="summary">Uso Excel para organizar información y elaborar tablas dinámicas. Estoy reforzando mis conocimientos de SQL para consultar datos y de Power BI para crear visualizaciones.</p>
        </article>
        <article class="card">
          <p class="category">Fundamentos de computación en la nube</p>
          <h3>Publicación web con GitHub y Vercel</h3>
          <p class="summary">Esta página forma parte de un ejercicio académico sobre publicación web. GitHub permite registrar los cambios de los archivos y Vercel publica el sitio para que se pueda abrir desde un navegador.</p>
        </article>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p><strong>Jean Pierre Alfredo Jara Espinoza</strong> · Universidad Nacional del Santa</p>
      <a href="#inicio">Volver arriba ↑</a>
    </div>
  </footer>
</body>
</html>
