<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Jean Pierre Alfredo Jara Espinoza">
  <meta name="description" content="Portafolio de Jean Pierre Jara Espinoza, estudiante de Ingeniería de Sistemas e Informática. Proyectos, pasantía, experiencia y CV.">
  <meta name="theme-color" content="#f9f8f2">
  <title>Jean Pierre Jara Espinoza · Portafolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
  <style>
    :root {
      --paper: #f9f8f2;
      --white: #fffefa;
      --ink: #172c25;
      --muted: #455a51;
      --green: #24573f;
      --sage: #e2eddf;
      --lime: #e1ebae;
      --blue: #e4eafa;
      --line: #d8dfd4;
      --display: "Instrument Serif", Georgia, serif;
      --body: "DM Sans", system-ui, sans-serif;
    }

    *, *::before, *::after { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body { margin: 0; color: var(--ink); background: var(--paper); font: 1rem/1.65 var(--body); }
    button { font: inherit; }
    a { color: inherit; text-underline-offset: .22em; }
    img { display: block; width: 100%; }
    h1, h2, h3, p, figure { margin: 0; }
    h1, h2, h3 { text-wrap: balance; }
    :focus-visible { outline: 3px solid #3e7759; outline-offset: 4px; }
    [id] { scroll-margin-top: 6rem; }
    .wrap { width: min(calc(100% - 3rem), 1136px); margin-inline: auto; }
    .skip { position: fixed; z-index: 10; left: 1rem; top: 1rem; padding: .5rem 1rem; background: var(--white); transform: translateY(-200%); }
    .skip:focus { transform: none; }

    .header { position: sticky; top: 0; z-index: 5; background: #f9f8f2f5; border-bottom: 1px solid var(--line); backdrop-filter: blur(12px); }
    .header-inner { min-height: 70px; display: flex; justify-content: space-between; align-items: center; gap: 1.1rem; }
    .brand { display: inline-flex; align-items: center; gap: .65rem; font-weight: 700; text-decoration: none; white-space: nowrap; }
    .monogram { display: grid; place-items: center; width: 2.25rem; aspect-ratio: 1; color: var(--green); background: var(--sage); border: 1px solid #c7dac8; border-radius: 50%; font: 1.15rem/1 var(--display); }
    nav ul { display: flex; flex-wrap: wrap; gap: .65rem clamp(.75rem, 2vw, 1.6rem); list-style: none; margin: 0; padding: 0; }
    nav a { color: var(--muted); font-size: .88rem; font-weight: 700; text-decoration: none; }
    nav a:hover { color: var(--green); text-decoration: underline; }

    .hero { display: grid; grid-template-columns: minmax(0, 1.32fr) minmax(0, 1fr); gap: clamp(1.6rem, 6vw, 6rem); align-items: center; padding-block: clamp(2.7rem, 7vw, 6.25rem) clamp(3rem, 7vw, 5.5rem); }
    .hero-copy { animation: arrive .7s ease-out both; }
    .overline { display: flex; align-items: center; gap: .55rem; margin-bottom: .9rem; color: var(--green); font-size: .73rem; font-weight: 700; letter-spacing: .12em; line-height: 1.35; text-transform: uppercase; }
    .overline::before { content: ""; width: .55rem; height: .55rem; flex: none; border-radius: 50%; background: #77a36b; }
    h1 { font: 400 clamp(3.7rem, 8vw, 7.1rem)/.86 var(--display); letter-spacing: -.025em; }
    h1 em { display: block; color: var(--green); font-weight: 400; }
    .intro { max-width: 49ch; margin-top: 1.5rem; color: var(--muted); font-size: clamp(1rem, 1.5vw, 1.16rem); }
    .actions { display: flex; flex-wrap: wrap; gap: .65rem; margin-top: 1.45rem; }
    .button { display: inline-flex; align-items: center; justify-content: center; gap: .65rem; min-height: 46px; padding: .6rem 1.05rem; border: 1px solid var(--green); border-radius: 100px; color: var(--green); background: transparent; cursor: pointer; font-size: .88rem; font-weight: 700; text-decoration: none; transition: transform .22s ease, background .22s ease; }
    .button[hidden] { display: none; }
    .button.primary { color: #fff; background: var(--green); }
    .button:hover { transform: translateY(-2px); background: var(--sage); }
    .button.primary:hover { background: #19422e; }
    .portrait { position: relative; isolation: isolate; width: 100%; max-width: 390px; justify-self: center; padding: .65rem .65rem 0; animation: arrive .75s .12s ease-out both; }
    .portrait::before { content: ""; position: absolute; z-index: -1; inset: -2% -5% 6% 4%; border-radius: 49% 49% 20px 20px; background: var(--sage); transform: rotate(7deg); }
    .portrait::after { content: ""; position: absolute; z-index: 1; width: clamp(34px, 7vw, 72px); aspect-ratio: 1; right: -4%; top: 8%; border-radius: 50%; background: var(--lime); border: 5px solid var(--paper); pointer-events: none; }
    .portrait img { aspect-ratio: 4 / 4.45; object-fit: cover; border-radius: 49% 49% 17px 17px; }
    @keyframes arrive { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: none; } }

    .section { padding-block: clamp(3rem, 6vw, 5.35rem); border-top: 1px solid var(--line); }
    .section h2 { font: 400 clamp(2.6rem, 5vw, 4.75rem)/.98 var(--display); letter-spacing: -.015em; }
    .section-intro { max-width: 62ch; margin-top: .75rem; color: var(--muted); }
    .project { display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1.08fr); align-items: stretch; margin-top: 1.65rem; overflow: hidden; border: 1px solid var(--line); border-radius: 24px; background: var(--white); }
    .project-copy { align-self: center; padding: clamp(1.4rem, 4vw, 3.25rem); }
    .meta { color: var(--green); font-size: .75rem; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; }
    .project h3, .card h3, .resume-side h3, .application h3 { margin-top: .28rem; font: 400 clamp(1.95rem, 3.6vw, 3.15rem)/1.05 var(--display); }
    .project p + p, .card p + p { margin-top: .65rem; }
    .project h3 + p, .card h3 + p { margin-top: .65rem; }
    .copy { color: var(--muted); }
    .tags { display: flex; flex-wrap: wrap; gap: .35rem; padding: 0; margin: 1rem 0 0; list-style: none; }
    .tags li { padding: .25rem .64rem; border: 1px solid #cfddd0; border-radius: 100px; background: #f1f6ee; color: var(--green); font-size: .76rem; font-weight: 700; }
    .photo { display: block; border: 0; cursor: zoom-in; padding: 0; width: 100%; overflow: hidden; background: var(--sage); }
    .photo:focus-visible { outline-offset: -5px; }
    .photo img { transition: transform .45s ease; }
    .photo:hover img { transform: scale(1.045); }
    .pet-media { min-height: 355px; display: grid; place-items: center; padding: 1.35rem; background: radial-gradient(ellipse at 70% 40%, #f6f8e4 0, #e6efda 48%, #d9e8d4 100%); }
    .pet-media img { width: clamp(134px, 47%, 192px); border-radius: 19px; outline: 5px solid #fffefa; box-shadow: 0 14px 27px #355a3e40; }
    .two-columns { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 1rem; margin-top: 1rem; }
    .card { padding: clamp(1.25rem, 3vw, 2rem); border: 1px solid var(--line); border-radius: 19px; background: var(--white); }
    .card h3 { font-size: clamp(1.75rem, 3vw, 2.35rem); }
    .card.soft { background: #eef2fb; border-color: #dce2ef; }
    .experience { grid-template-columns: minmax(0, 1.04fr) minmax(0, 1fr); margin-top: 1.55rem; }
    .campus-photo { min-height: 310px; position: relative; }
    .campus-photo img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: 50% 46%; }

    .cv-heading { display: flex; flex-wrap: wrap; align-items: end; justify-content: space-between; gap: .9rem; }
    .resume { display: grid; grid-template-columns: minmax(0, 1.35fr) minmax(0, .85fr); gap: 1rem; margin-top: 1.45rem; }
