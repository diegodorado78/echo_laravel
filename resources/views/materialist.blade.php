
@extends('layouts.layout')
@section('content')
  {{-- BUSCADOR Y  MATERIAS --}}
<section class="seccion1 text-center text-blue-900 my-10" >
  <livewire:buscador>
</section>
<section>
   <div>
<div class="mx-auto my-10 w-11/12 ">
  <a href="{{route('materias')}}">
      <h1 class="bg-blue-900 cursor-pointer text-lg text-white font-bold p-2 rounded-md w-2/5 text-center mx-auto my-5"> Áreas del Conocimiento</h1>
    </a>
    <nav class="">
    <ul class="mx-5 md:flex md:flex-wrap ">
      <li class="li-materia my-2" > Populares:</li>
      @foreach ($subjects as $item)
          <li class="li-materia my-2">
        <a class="a-materia text-blue-900 text-bold" href="#">
          {{$item->name}}
        </a>
      </li>
      @endforeach
    </ul>
  </nav>
    </div>
</div>
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
    {{-- <div>
@foreach ($usuariosA as $usuario)
<div>
<h1> {{ $usuario['name'] }}
<h1>{{ $usuario['email'] }} </h1>
</div>
@endforeach
</div> --}}
</section>
@endsection
