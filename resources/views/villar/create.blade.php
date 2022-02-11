@extends('layouts.master')
@section('title','principal')
@section('content')
    
<div class="container mt-5">
    <form class="row g-3">
        <div class="col-md-4">
          <label for="validationDefault01" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Apellidos</label>
          <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefaultUsername" class="form-label">Correo</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
            <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationDefault03" class="form-label">Direccion</label>
          <input type="text" class="form-control" id="validationDefault03" required>
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Estado civil</label>
          <select class="form-select" id="validationDefault04" required >
            <option>Soltero</option>
            <option>Casado</option>

          </select>
        </div>
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label">Edad</label>
          <input type="text" class="form-control" id="validationDefault05" required>
        </div>
        
        <div class="col-12">
          {{-- <button class="btn btn-primary" type="submit">Registrar</button> --}}
          <input class="btn btn-primary" type="submit" value="Registrar">
        </div>
      </form>

@endsection