
@extends('layouts.app')

@section('titulo')
pagina principal
@endsection
@vite('resources/js/app.js')

@section('contenido')

<x-listar-post :posts="$posts" />

@endsection
