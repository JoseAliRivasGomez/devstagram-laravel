@extends('layouts.app')

@section('titulo')
    Pagina principal
@endsection

@section('contenido')
    
    <x-listar-posts :posts="$posts" />

@endsection