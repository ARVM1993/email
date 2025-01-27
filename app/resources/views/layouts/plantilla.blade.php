<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "Titulo")</title>
    @stack('styles') <!-- Aquí se inyectan los estilos de cada vista -->

</head>
<style>
    body {
        display: grid;
        grid-template-areas:
            "header header"
            "aside main"
            "footer footer";
        grid-template-rows: auto 1fr auto;
        grid-template-columns: 250px 1fr;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        }

    header{
        grid-area: header;
        background-color: #007BFF;
        color: white;
        padding: 1rem;
        text-align: center;
    }
    aside{
        grid-area: aside;
        background-color: #f0f0f0;
        padding: 1rem;
    }
    main{
        grid-area: main;
        padding: 1rem;
    }
    footer{
        grid-area: footer;
        background-color: #333;
        color: white;
        text-align: center;
        padding: 1rem;
    }
</style>
<body>
    <header>
        <h1>@yield("header", "Bienvenido a Mi Sitio Web")</h1>
    </header>

    <aside>
        <h2>Menu</h2>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contactanos</a></li>
        </ul>
    </aside>
    <main>
        @yield("main","Contenido principal aqui")
    </main>
    <footer>
        <p>@yield("footer", "Todos los derechos reservados")</p>
    </footer>

    
</body>
</html>