@extends('plantilla')
@section('title', 'Crear')
@section('content')


<head>
  
  <!-- Required meta tags -->
  <link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
</head>
  <body>
    <main class="contenedor sombra">
        <br>
        <h2 style="color:rgb(205, 92, 92)"  >CREAR USUARIOS</h2>
        <br>
       <form action="{{ route('usuarios.insertar') }}" method="post" class="bg-white">
        @csrf
        <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-400"
        placeholder='Nombre' name='Nombre'>
        <input type="password" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-400"
        placeholder='Contraseña' name='Contraseña'>
        <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Enviar</button>
    </form>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </main>
  </body>

@endsection



      




