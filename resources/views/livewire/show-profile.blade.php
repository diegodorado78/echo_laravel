<div>
    @foreach ($users as $user)
    <div class="bg-white shadow-lg rounded-lg  mx-auto my-5  p-2  w-100">
        <h1> <strong> Nombre:</strong>  {{ $user->name}}</h1>
        <p>  <strong> Teléfono: </strong>  {{ $user->phone}}</p>
        <p><strong>Email:</strong>  {{ $user->email}}</p>
        <p> <strong>Calificación :</strong> 4.6</p>
        <p> <strong>Localicación :</strong> Bogotá DC</p>
    </div>
    @endforeach
    </div>
