@extends('layouts.main')
@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Usuarios {{ $numero }}</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal"
            data-bs-target="#modalAgregar">
            <i class="fas fa-download fa-sm text-white-50"></i> Agregar Usuaro
        </a>
    </div>
    {{-- modal --}}
    <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Agregar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('admin/usuario') }}" method="post">
                  @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass1" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="pass2"  placeholder="Confirmar Password">
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
