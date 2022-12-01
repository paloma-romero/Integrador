@extends('plantilla')
@section('title', 'Editar')
@section('content')

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
    @csrf
    @method('put')
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Editar usuario: {{ $usuario->id }}</h2>
<input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-400"
placeholder='Nombre' name='Nombre' value="{{ $usuario->Nombre }}">
<input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-400"
placeholder='Contraseña' name='Contraseña' value="{{ $usuario->Contraseña }}">
<button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold rounded text-white hover:bg-green-600">Enviar</button>
</form>

@endsection
