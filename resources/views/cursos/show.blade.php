@extends('layouts.master')
@section('title','Curso '.$curso->name)
@section('content')
    
<h1>Estas en el curso: {{$curso->name}}</h1>
<a href="{{ route('index') }}">Volver a Curso</a>
<br>
<a href="{{ route('cursos.edit',$curso) }}">Editar Curso</a>

<p><strong>Categoria: </strong>{{ $curso->categoria }}</p>
<p>{{ $curso->descripcion }}</p>
@endsection