@extends('layouts.layout')

@section('content')
<div class="grid grid-cols-3 gap-4">
  {{-- primer columna que ocupa un espacio --}}
  <div class="p-8 bg-gray-200 col-span-1">
      <h1 class="text-lg text-center font-semibold">Instruido por</h1>
  </div>
<div class="p-8 bg-gray-200 col-span-2">
    <img src="{{$subject->image}}" alt="">
    <h2>{{$subject->name}}</h2>
      <p>{{$subject->description}}</p>
      <div class="flex mt-3">
         <p class="text-gray-500 text-xs "> Creado: {{$subject->created_at->diffForHumans()}} </p>

          {{-- <img src="{{$subject->user->image}}" alt=""> --}}
      </div>
  </div>
</div>
@endsection