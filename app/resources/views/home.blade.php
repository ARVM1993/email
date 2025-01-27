@extends('layouts.plantilla') <!-- Hereda de la plantilla base -->

@section('title', 'Página de Inicio') <!-- Título específico -->


@push("styles")
<style>
    body {
        background-color: #f9f9f9; /* Fondo diferente para esta vista */
        color: #333; /* Color de texto estándar */
        font-family: 'Arial', sans-serif;
    }

    header {
        background-color: #4CAF50; /* Color verde para el header */
        color: white;
        text-align: center;
        padding: 1rem 0;
    }

    aside {
        background-color: #f1f1f1; /* Fondo claro en el menú lateral */
        border-right: 2px solid #ccc;
        padding: 1rem;
    }

    main {
        background-color: #fff; /* Fondo blanco para el contenido */
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 1.5rem;
        margin: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    footer {
        background-color: #222; /* Pie de página oscuro */
        color: #aaa;
        padding: 1rem;
        text-align: center;
    }

    a {
        color: #4CAF50;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
@endpush
@section('header')
    <h1>Inicio - Mi Sitio Web</h1> <!-- Personalización del header -->
@endsection

@section('main')
    <h2>Bienvenido a la página principal</h2>
    <p>Este es el contenido principal de la página de inicio. Aquí puedes agregar texto, imágenes o cualquier información importante.</p>
@endsection

@section('footer')
    <p>Creado con Laravel - Todos los derechos reservados &copy; 2025</p> <!-- Personalización del footer -->
@endsection
