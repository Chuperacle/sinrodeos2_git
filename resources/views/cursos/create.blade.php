@extends('layouts.master')
@section('title', 'principal')
@section('content')

    <h1>Estas en pagina de crear curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
      @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="5" >{{ old('descripcion') }}</textarea>
        </label>
        @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ old('categoria') }}"">
        </label>
        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
        <br>
        <button type="submit">Enviar</button>

    </form>
@endsection
