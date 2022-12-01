@extends('plantilla')
@section('title', 'home')
@section('content')

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
  <main class="contenedor sombra">
    <table class="table-fixed w-full">
      <thead>
        <tr class=" text-white text-center" style="background-color:hsl(168, 76%, 32%);">
          <th class="w-20 py-4 ...">ID</th>
          <th class="w-1/8 py-4 ...">Nombre</th>
          <th class="w-1/16 py-4 ...">Contraseña</th>
          <th class="w-28 py-4 ... text-center">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($usuario as $row)


        <tr>
          <td class="py-3 px-6">{{ $row->id }}</td>
          <td class="p-3 text-center">{{ $row->Nombre }}</td>
          <td class="p-3 text-center">{{ $row->Contraseña }}</td>
          <td class="p-3 flex justify-center" >
            <form action="{{ route('usuarios.confirm', $row->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                <i class="fas fa-trash"></i></button>
            </form>
            <a href='{{route('usuarios.edit', $row->id)}}' class="bg-green-500 text-white px-3 py-1 rounded-sm">
            <i class="fas fa-pen"></i></a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </main>
</div>

@endsection
