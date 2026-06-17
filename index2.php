<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Darkmode.js - Modo Oscuro para Sitios Web</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<style>
.hero{
    background: linear-gradient(135deg,#0f172a,#1e293b);
    color:white;
    padding:100px 0;
}

.feature-card{
    transition:.3s;
    height:100%;
}

.feature-card:hover{
    transform:translateY(-5px);
}

.code-box{
    background:#1e293b;
    color:#f8fafc;
    padding:20px;
    border-radius:10px;
    overflow:auto;
}

.section{
    padding:80px 0;
}

.footer{
    background:#0f172a;
    color:white;
    padding:30px 0;
}
</style>
</head>
<body>

<?php include 'navbar.html'; ?>

<!-- Hero -->
<header class="hero text-center">
    <div class="container">
        <h1 class="display-3 fw-bold">🌓 Darkmode.js</h1>
        <p class="lead mt-4">
            Agrega modo oscuro a cualquier sitio web en pocos segundos.
        </p>
        <a href="#que-es" class="btn btn-light btn-lg mt-3">
            Conocer más
        </a>
    </div>
</header>

<!-- Qué es -->
<section id="que-es" class="section">
    <div class="container">
        <h2 class="mb-4">¿Qué es Darkmode.js?</h2>

        <p>
            Darkmode.js es una librería JavaScript ligera desarrollada para
            añadir un modo oscuro (Dark Mode) a cualquier sitio web sin
            necesidad de rediseñar completamente los estilos.
        </p>

        <p>
            Utiliza la propiedad CSS
            <strong>mix-blend-mode</strong> para invertir visualmente los
            colores de la interfaz y generar un efecto de modo nocturno
            de forma automática.
        </p>

        <p>
            Además, puede recordar la preferencia del usuario mediante
            almacenamiento local y detectar automáticamente si el sistema
            operativo utiliza un tema oscuro.
        </p>
    </div>
</section>

<!-- Características -->
<section class="section bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Características Principales</h2>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="card feature-card shadow-sm">
                    <div class="card-body text-center">
                        <h3>⚡</h3>
                        <h5>Ligera</h5>
                        <p>
                            Construida en JavaScript puro sin dependencias
                            externas.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card feature-card shadow-sm">
                    <div class="card-body text-center">
                        <h3>💾</h3>
                        <h5>Recuerda preferencias</h5>
                        <p>
                            Guarda automáticamente la elección del usuario.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card feature-card shadow-sm">
                    <div class="card-body text-center">
                        <h3>🌙</h3>
                        <h5>Modo automático</h5>
                        <p>
                            Detecta el tema del sistema operativo usando
                            prefers-color-scheme.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card feature-card shadow-sm">
                    <div class="card-body text-center">
                        <h3>🎛️</h3>
                        <h5>Programable</h5>
                        <p>
                            Puede utilizarse con o sin el widget flotante.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Instalación -->
<section class="section">
    <div class="container">
        <h2 class="mb-4">Instalación rápida</h2>

        <p>
            La forma más sencilla es utilizar la versión distribuida por CDN:
        </p>

<div class="code-box">
&lt;script src="https://cdn.jsdelivr.net/npm/darkmode-js/lib/darkmode-js.min.js"&gt;&lt;/script&gt;<br>

&lt;script&gt;<br>
&emsp;function addDarkmodeWidget() {<br>
&emsp;&emsp;new Darkmode().showWidget();<br>
&emsp;}<br>

&emsp;window.addEventListener('load', addDarkmodeWidget);<br>
&lt;/script&gt;
</div>

    </div>
</section>

<!-- Configuración -->
<section class="section bg-light">
    <div class="container">

        <h2 class="mb-4">Opciones de configuración</h2>

        <p>
            Darkmode.js permite personalizar la posición, colores,
            animaciones y comportamiento del widget.
        </p>

<div class="code-box">
const options = {<br>
&emsp;bottom: '64px',<br>
&emsp;left: '32px',<br>
&emsp;time: '0.5s',<br>
&emsp;mixColor: '#ffffff',<br>
&emsp;backgroundColor: '#ffffff',<br>
&emsp;buttonColorDark: '#100f2c',<br>
&emsp;buttonColorLight: '#ffffff',<br>
&emsp;saveInCookies: false,<br>
&emsp;label: '🌓',<br>
&emsp;autoMatchOsTheme: true<br>
};<br>

const darkmode = new Darkmode(options);<br>
darkmode.showWidget();
</div>

    </div>
</section>

<!-- API -->
<section class="section">
    <div class="container">
        <h2 class="mb-4">Uso mediante API</h2>

        <p>
            Si no deseas mostrar el botón flotante, puedes controlar el
            modo oscuro desde tu propia interfaz utilizando los métodos
            incorporados.
        </p>

<div class="code-box">
const darkmode = new Darkmode();<br>

darkmode.toggle();<br>

console.log(darkmode.isActivated());
</div>

        <ul class="mt-4">
            <li><strong>toggle()</strong> activa o desactiva el modo oscuro.</li>
            <li><strong>isActivated()</strong> devuelve el estado actual.</li>
        </ul>

    </div>
</section>

<!-- Ventajas -->
<section class="section bg-light">
    <div class="container">
        <h2 class="mb-4">Ventajas de utilizar Darkmode.js</h2>

        <div class="row">

            <div class="col-md-6">
                <ul>
                    <li>Implementación extremadamente rápida.</li>
                    <li>No requiere reescribir estilos completos.</li>
                    <li>Experiencia de usuario mejorada.</li>
                    <li>Persistencia automática de preferencias.</li>
                </ul>
            </div>

            <div class="col-md-6">
                <ul>
                    <li>Compatible con sitios ya existentes.</li>
                    <li>Funciona con JavaScript puro.</li>
                    <li>Configuración mínima.</li>
                    <li>Personalización sencilla.</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Compatibilidad -->
<section class="section">
    <div class="container">
        <h2 class="mb-4">Compatibilidad</h2>

        <p>
            Darkmode.js se basa principalmente en
            <strong>mix-blend-mode</strong> y en la media query
            <strong>prefers-color-scheme</strong>.
        </p>

        <p>
            Aunque funciona correctamente en la mayoría de los navegadores
            modernos, algunos navegadores antiguos pueden presentar
            limitaciones o incompatibilidades.
        </p>
    </div>
</section>

<footer class="footer text-center">
    <div class="container">
        <h5>Darkmode.js</h5>
        <p>
            Biblioteca JavaScript para incorporar modo oscuro de forma rápida.
        </p>
    </div>
</footer>

<!-- Darkmode: https://darkmodejs.learn.uno/ -->
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
	function addDarkmodeWidget() {
		new Darkmode().showWidget();
	}
	window.addEventListener('load', addDarkmodeWidget);
</script>

<!-- Selecciona el enlace de navbar -->
<script>
	document.getElementById('metodo2').classList.add('active')
	document.getElementById('metodo1').classList.remove('active')
</script>

</body>
</html>