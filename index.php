<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modo Oscuro Manual con CSS y JavaScript</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<style>
/* =========================
   TEMA CLARO (POR DEFECTO)
   ========================= */
:root{
    --bg-color: #ffffff;
    --text-color: #212529;
    --card-bg: #f8f9fa;
    --accent-color: #0d6efd;
    --border-color: #dee2e6;
}

/* =========================
   TEMA OSCURO
   ========================= */
.dark-mode{
    --bg-color: #121212;
    --text-color: #e9ecef;
    --card-bg: #1e1e1e;
    --accent-color: #4dabf7;
    --border-color: #444;
}

/* =========================
   ESTILOS GENERALES
   ========================= */
body{
    background: var(--bg-color);
    color: var(--text-color);
    transition: all .3s ease;
}

.hero{
    padding: 80px 0;
    text-align: center;
}

.card{
    background: var(--card-bg);
    border-color: var(--border-color);
    color: var(--text-color);
}

.code-box{
    background: #1e293b;
    color: white;
    padding: 20px;
    border-radius: 10px;
    overflow-x: auto;
    font-family: Consolas, monospace;
}

.section{
    padding: 70px 0;
}

.btn-theme{
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999;
}

.footer{
    padding: 30px;
    text-align: center;
    border-top: 1px solid var(--border-color);
}
</style>
</head>
<body>

<?php include 'navbar.html'; ?>

<button id="toggleTheme" class="btn btn-primary btn-theme">
    🌙 Cambiar tema
</button>

<header class="hero">
    <div class="container">
        <h1 class="display-4 fw-bold">
            Implementación Manual de Dark Mode
        </h1>

        <p class="lead mt-3">
            Utilizando variables CSS, la pseudo-clase :root,
            una clase .dark-mode y JavaScript.
        </p>
    </div>
</header>

<section class="section">
    <div class="container">

        <h2>¿Por qué implementar el modo oscuro manualmente?</h2>

        <p>
            A diferencia de bibliotecas como Darkmode.js, una implementación
            manual proporciona control total sobre los colores,
            componentes y comportamiento de la interfaz.
        </p>

        <p>
            El enfoque más moderno consiste en definir variables CSS
            para el tema claro y sobrescribirlas mediante una clase
            <code>.dark-mode</code>.
        </p>

    </div>
</section>

<section class="section">
    <div class="container">

        <h2>Paso 1: Definir variables en :root</h2>

        <p>
            La pseudo-clase <code>:root</code> representa el elemento
            raíz del documento (<code>&lt;html&gt;</code>) y es un lugar ideal
            para declarar variables CSS globales.
        </p>

<div class="code-box">
:root{<br>
&emsp;--bg-color: #ffffff;<br>
&emsp;--text-color: #212529;<br>
&emsp;--card-bg: #f8f9fa;<br>
}
</div>

    </div>
</section>

<section class="section">
    <div class="container">

        <h2>Paso 2: Crear la clase .dark-mode</h2>

        <p>
            Cuando la clase esté presente en el documento,
            las variables tomarán nuevos valores.
        </p>

<div class="code-box">
.dark-mode{<br>
&emsp;--bg-color: #121212;<br>
&emsp;--text-color: #f8f9fa;<br>
&emsp;--card-bg: #1e1e1e;<br>
}
</div>

    </div>
</section>

<section class="section">
    <div class="container">

        <h2>Paso 3: Utilizar las variables</h2>

        <p>
            Los componentes no utilizan colores fijos.
            En su lugar consumen las variables definidas anteriormente.
        </p>

<div class="code-box">
body{<br>
&emsp;background: var(--bg-color);<br>
&emsp;color: var(--text-color);<br>
}
<br>
.card{<br>
&emsp;background: var(--card-bg);<br>
}
</div>

    </div>
</section>

<section class="section">
    <div class="container">

        <h2>Paso 4: Alternar la clase mediante JavaScript</h2>

<div class="code-box">
const button =
document.getElementById("toggleTheme");<br>

button.addEventListener("click", () => {<br>
&emsp;document.documentElement.classList.toggle("dark-mode");<br>

});
</div>

        <p class="mt-3">
            <strong>document.documentElement</strong> representa el
            elemento <code>&lt;html&gt;</code>. Al agregar o quitar la clase
            <code>dark-mode</code>, todas las variables cambian automáticamente.
        </p>

    </div>
</section>

<section class="section">
    <div class="container">

        <h2>Flujo de funcionamiento</h2>

        <div class="card p-4 shadow-sm">
            <ol>
                <li>El navegador carga el tema claro definido en <code>:root</code>.</li>
                <li>El usuario presiona el botón de cambio de tema.</li>
                <li>JavaScript agrega o elimina la clase <code>.dark-mode</code>.</li>
                <li>Las variables CSS son redefinidas.</li>
                <li>Todos los elementos actualizan automáticamente sus colores.</li>
            </ol>
        </div>

    </div>
</section>

<section class="section">
    <div class="container">

        <h2>Ventajas de este enfoque</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 p-4">
                    <h4>🎨 Control total</h4>
                    <p>
                        Cada color puede personalizarse de forma precisa.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 p-4">
                    <h4>⚡ Alto rendimiento</h4>
                    <p>
                        No requiere librerías externas.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 p-4">
                    <h4>🛠 Escalable</h4>
                    <p>
                        Facilita la creación de múltiples temas visuales.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<footer class="footer">
    <h5>Modo Oscuro Manual con CSS Variables</h5>
    <p>
        Implementación basada en :root + .dark-mode + JavaScript.
    </p>
</footer>

<script>
const toggleButton = document.getElementById("toggleTheme");

toggleButton.addEventListener("click", () => {

    document.documentElement
            .classList
            .toggle("dark-mode");

});
</script>

<!-- Selecciona el enlace de navbar -->
<script>
	document.getElementById('metodo1').classList.add('active')
	document.getElementById('metodo2').classList.remove('active')
</script>

</body>
</html>

