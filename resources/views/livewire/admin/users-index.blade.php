<div>
    <div class="card">
        {{-- card header --}}
<div class="card-header ">
    <input wire:model="search" type="text" class="form-control" placeholder="ingrese nombre o correo de usuario">
</div>
@if ($users->count())
      <div class=" container mw-100 mx-auto text-center">
<table class=" mx-auto ">
          <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Perfil</th>
                </tr>
            </thead>
            <tbody class="text-left ">
      @foreach ($users as $user)
      <tr >
        <td class="float-left px-1 border">{{$user->id}}</td>
        <td class="border px-1">{{$user->name}}</td>
        <td class="border px-1">{{$user->email}}</td>
        <td class="border px-1">{{$user->phone}}</td>
        <td class="border px-1">{{$user->user_type}}</td>
        <td class="px-1"><a class="btn btn-primary mx-2 w-max" href="{{route('admin.users.edit',$user)}}">Editar</a></td>
        <td class="px-1"><a class="btn btn-danger " href="{{route('admin.users.edit',$user)}}">Eliminar</a></td>

        {{-- <td><a  class="btn btn-danger" href="{{route('admin.users.delete',$user)}}">Eliminar</a></td> --}}
      </tr>
      @endforeach
            </tbody>
        </table>
        </div>
        {{-- footer --}}
    <div class="card-footer">
        {{$users->links()}}
    </div>


    @else
        <div class="card-body">
            <strong>No hay registros que coincidan</strong>
        </div>
    @endif
    </div>
</div>
