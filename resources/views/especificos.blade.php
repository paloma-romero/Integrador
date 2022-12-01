@extends('plantilla')
@section('title', 'home')
@section('content')


<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-purple-500 text-white">
          <th class="w-20 py-4 ...">OBJETIVOS ESPECIFICOS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-3 px-6 ">
            - Recrear un sistema de alerta de proximidad usando un Arduino a través de sensores e indicadores visuales y auditivos.
            <br>- Programar indicadores que reflejen la distancia entre el sensor y cualquier objeto en su camino
            <br>- Programar una app que ayude a estacionarse usando las estimaciones de los sensores. 
             
          </td>
        </tr>
       

      </tbody>
    </table>
</div>

@endsection
