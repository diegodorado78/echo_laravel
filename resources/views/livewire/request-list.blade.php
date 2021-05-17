
{{-- @extends('layouts.layout')
 @section('content') --}}
<div class=" md:grid grid-cols-3 text-center">
    @foreach ($requests as $request)
    <div class="bg-white shadow-lg rounded-lg text-center mx-auto my-2 p-2 w-4/5">
        <h1 class="text-bold text-xl text-blue-800"> Solicitud {{$request->id}}</h1>
        <h1> <strong> materia:</strong>  {{ $request->subject_name}}</h1>
        <p>  <strong> valor $: </strong>  {{ $request->fare}}</p>
        <p><strong>medio de pago:</strong>  {{ $request->payment_method}}</p>
        <p> <strong> Sitio de tutoria:</strong> {{ $request->site}}</p>
    </div>
    @endforeach
    </div>

 {{-- @endsection --}}

