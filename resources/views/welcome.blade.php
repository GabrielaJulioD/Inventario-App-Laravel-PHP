<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tu Inventario</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/estilos.css'])
        <!-- Styles -->
   
    </head>
    <body style='padding: 0 10rem 0 10rem;' class="antialiased">
    @if (Route::has('login'))
                <div class="navi">
                <a class="logo">Tu Inventario</a>
                <a class="logo" href="#features">Características</a>
                <a class="logo" href="#about">Acerca de Nosotros</a>
                <a class="logo" href="#contact">Contacto</a>

                    @auth
                        <a href="{{ url('/home') }}" class="Home" style='text-decoration: none; color: #fff; font-size: 1.3rem; font-weight: bold;'>Home</a>
                    @else
                        <a href="{{ route('login') }}" class="login" style='text-decoration: none; color: #fff; font-size: 1.3rem; font-weight: bold;'>Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="register" style='text-decoration: none; color: #fff; font-size: 1.3rem; font-weight: bold;'>Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <section class="hero">

        <img src="{{asset('assets/img1.png')}}" alt="Ilustración de la tienda">
        <div class="hero-content">
            <h1>Bienvenido a Tu Inventario</h1>
            <p>Descubre productos increíbles y agregalos como quieras.</p>
            <a href="{{ route('login') }}">Comenzar</a>
        </div>
    </section>

    <section id="features" class="features">
    <div class="feature">
        <h2>Eficiencia</h2>
        <p>Agrega tus productos en tiempo récord con nuestro servicio rápido y eficiente.</p>
    </div>

    <div class="feature">
        <h2>Productos </h2>
        <p>Agrega tus productos según tus necesidades.</p>
    </div>

    <div class="feature">
        <h2>Atención al Cliente</h2>
        <p>Nuestro equipo de atención al cliente está disponible las 24 horas para ayudarte en lo que necesites.</p>
    </div>
    </section>

    <section id="about" class="about">
    <div class="about-content">
        <h2>Sobre Nosotros</h2>
        <p>Somos un sistema de inventarios en línea comprometida en gestionar tus productos y brindar la mejor experiencia a nuestros clientes.</p>
    </div>

    <div class="about-image">
     
        <img src="{{asset('assets/img2.png')}}" alt="Sobre Nosotros">
    </div>
    </section>

    <section id="contact" class="contact">
    <div class="contact-content">
        <h2>Contacto</h2>
        <p>¿Tienes alguna pregunta o comentario? Contáctanos y estaremos encantados de ayudarte.</p>

        <form action="procesar_formulario.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <button type="submit">Enviar Mensaje</button>
        </form>
    </div>
    </section>

    <footer>
        <p>&copy; 2023 Tu Inventario</p>
    </footer>
    </body>
</html>
