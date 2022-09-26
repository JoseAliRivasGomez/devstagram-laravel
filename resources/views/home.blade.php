@extends('layouts.app')

@section('titulo')
    Pagina principal
@endsection

@section('contenido')
    
    <x-listar-posts :posts="$posts" />

    <div>
        @if ($users->count())
                
            <div class="">
            <h2 class="font-black text-center text-3xl mb-5">Usuarios:</h2>
            @foreach ($users as $user)
                <div>
                    <a href="{{route('posts.index', $user)}}">
                        <p class="text-gray-600 uppercase text-xl text-center font-bold">{{$user->username}}</p>
                    </a>
                </div>
            @endforeach
            </div>
    
            <div class="mt-10">
                {{$users->links()}}
            </div>
        @endif
    </div>

@endsection