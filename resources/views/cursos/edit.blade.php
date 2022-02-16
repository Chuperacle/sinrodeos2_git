@extends('layouts.master')
@section('title', 'Cursos Edit')
@section('content')

    <h1>Editar un Cursos</h1>
    <form action="{{ route('cursos.update',$curso) }}" method="post">
      @csrf
      @method('put')
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{ $curso->name }}">
        </label>
        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="5" >{{ $curso->descripcion }}</textarea>
        </label>
        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ $curso->categoria }}">
        </label>
        <br>
        <button type="submit">ACtualizar</button>

    </form>
@endsection
