@extends('layouts.layout')

@section('content')
  {{-- BUSCADOR Y  MATERIAS --}}
<section class="seccion1 text-center text-blue-900 my-10" >
  <livewire:buscador>
  <livewire:materialist>
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
@endsection