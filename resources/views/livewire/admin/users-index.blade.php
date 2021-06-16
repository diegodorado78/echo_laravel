<div>
    <div class="card">
        {{-- card header --}}
<div class="card-header">
    <input wire:model="search" type="text" class="form-control" placeholder="ingrese nombre o correo de usuario">
</div>
@if ($users->count())
      <div class="card-body mx-auto">
<table>
          <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Perfil</th>
                </tr>
            </thead>
            <tbody>
      @foreach ($users as $user)
      <tr  >
        <td >{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->user_type}}</td>
        <td ><a class="btn btn-primary mx-2" href="{{route('admin.users.edit',$user)}}">Editar</a></td>
        <td ><a class="btn btn-danger mx-2" href="{{route('admin.users.edit',$user)}}">Eliminar</a></td>

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
