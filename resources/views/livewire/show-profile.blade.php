<div>
    @foreach ($users as $user)
    <div class="bg-white shadow-lg rounded-lg  mx-auto my-5  p-2  w-100">
        {{-- <img src="{{asset($user->profile_photo_path)}}" class="h-1/6 md:h-2/6 mx-auto rounded-full"> --}}
        <img src="{{asset('./images/user_photo.jpg')}}" class="h-1/6 md:h-2/6 mx-auto rounded-full">
            <h1 class="text-xxl font-extrabold text-center text-blue-800"> {{$user->user_type}}</h1>
        <h1> <strong> Nombre:</strong>  {{ $user->name}}</h1>
        <p>  <strong> Teléfono: </strong>  {{ $user->phone}}</p>
        <p><strong>Email:</strong>  {{ $user->email}}</p>
        <p> <strong>Calificación :</strong> 4.8 </p>
        <p> <strong>Localicación :</strong> Bogota DC</p>
    </div>
    @endforeach
    </div>
