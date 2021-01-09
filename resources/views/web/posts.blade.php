@extends('layouts_web.app')
@section('content')
<h1>Hola contenido de blog</h1>
@foreach ($posts as $item)
    <div class="post">
        <h2>{{$item->name}}</h2>
        <img src="{{$item->file}}" alt="{{$item->name}}">
        <p>{{$item->excerpt}}</p>
        <a href="#">Leer más...</a>
    </div>
@endforeach
<div class="container-btn">
    <a class="btn btn-primary btn-pagination" href="{{ $posts->previousPageUrl()}}">Anterior</a>
    <span class="page-number">{{$posts->currentPage()}}</span>
    <a class="btn btn-primary btn-pagination" href="{{ $posts->nextPageUrl() }}">Siguiente</a>
</div>

@endsection


