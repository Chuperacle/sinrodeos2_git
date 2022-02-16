@extends('layouts.master')
@section('title', 'principal')
@section('content')
    <h1>Bienvenido a pagina principal de Cursos</h1>
    <a href="{{ route('cursos.create') }}">Crear Curso</a>
    <ul>
        @forelse ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso->id) }}">{{ $curso->name }}</a>
            </li>

        @empty
            <h1>No hay nada Carnal</h1>
        @endforelse
    </ul>

    {{ $cursos->links() }}
@endsection
