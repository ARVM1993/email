@extends('layouts.plantilla')

@section("title", "Curso - " . $curso) <!-- Título dinámico -->

@section("main")
    <h1>Bienvenido al curso {{ $curso }}</h1> <!-- Muestra el nombre del curso -->
@endsection
