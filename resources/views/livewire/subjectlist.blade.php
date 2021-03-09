<div>
    @extends('layouts.layout')
@section('content')
{{-- CONTAINER --}}
    <div class="mx-auto">
    <div class="crea-materia w-5/6 mx-auto my-4 ">

{{-- MOSTRAR MATERIAS populares--}}
     <h1 class="text-center text-xl font-bold text-blue-800">Materias Populares </h1>
    <div class="md:grid grid-cols-3">
      @foreach($subjects as $subject)
     <div class="bg-white shadow-lg rounded-lg px4 text-center p-5 ">
    <a href="{{route('materiaI',$subject->id)}}">
    <img src="{{$subject->image}}"  class="rounded-md mb-2 w-auto">
    <h2 class="text-md text-gray-600 truncate uppercase">{{$subject->name}}</h2>
    <p> {{$subject->description}} </p>
    </a>
    </div>
    @endforeach
  </div>

  </div>



@endsection
</div>