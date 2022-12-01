@extends('app')
@section('title', 'Confirmar eliminación')
@section('content')


<h1 class="mt-4 display-1 text-center text-black"> <i class="bi bi-cardchecklist">Confirmar eliminación</i></h1>
<div class="container col-md-6">
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>¿Seguro que quieres eliminar este usuario? {{ $usuario->Nombre}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" arialabel="close"></button>
    </div>
    <div class="card m-5">
        <h5 class="card-header text-blue"><i class="bi bi-calendar3 textred">Id de usuario: {{ $usuario->id }}</i></h5>
        <div class="card-body">
            <h5 class="card-title fw-semibold">Nombre:{{ $usuario->Nombre }}</h5>
            <p class="card-text fw-light">Contraseña: {{ $usuario->Contraseña }}</p>
        </div>
        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <form action="{{ route('usuarios.destroy', $usuario->id)}}" method="POST">
                    {!! method_field('DELETE')!!}
                    {!! csrf_field () !!}
                    <button type="submit" class="btn btn-outline-danger">Si quiero eliminarlo</button>
                </form>
                <a href="{{ route('usuarios.index') }}" class="btn btnoutline-danger">No quiero regresar <i class="bi bi-trash"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection