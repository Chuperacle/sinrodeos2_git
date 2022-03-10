@extends('layouts.master')
@section('title', 'Contactanos')
@section('content')
    <h1>Déjanos un mensaje</h1>
    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        <label for="">
            Nombre: 
            <br>
            <input type="text" name="name">
        </label>
        @error('name')
        <p><strong>{{$message}}</strong></p>
         @enderror
        <br>
        <label for="">
            correo: <br>
            <input type="text" name="correo">
        </label>
        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <label for="">
            mensaje: <br>
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
        </label>

        @error('mensaje')
                <p><strong>{{$message}}</strong></p>
         @enderror
        <br>
        <br>
        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{ session('info')}}");
        </script>
    @endif
@endsection
