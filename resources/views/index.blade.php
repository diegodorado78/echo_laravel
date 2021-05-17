@extends('layouts.layout')
@section('content')
  {{-- BUSCADOR Y  MATERIAS --}}
<section class="seccion1 text-center text-blue-900 my-10" >
  <livewire:buscador>
</section>
<section>
    {{-- <livewire:materialist :subjects ="$subjects"> --}}
    {{-- <x-lista /> --}}
</section>
  {{-- FORMULARIO COMPRA --}}
<section class="seccion2 my-20 text-center">
     <livewire:formulario-tutoria>
</section>
  {{-- PROPUESTA DE VALOR --}}
<section class="seccion3 my-20">
     <livewire:cadena-valor>
</section>
  {{-- CLIENTES SATISFECHOS --}}
<section class="seccion4 my-20">
     <livewire:clientes>
</section>
<section class="seccion5 my-20">
  {{-- <livewire:subject> --}}
    <div>
@foreach ($usuariosA as $item)
    <h1> {{$item->email}}</h1>
@endforeach
</div>
</section>


@endsection
