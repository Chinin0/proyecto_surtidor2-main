<div>
    <div class="card">

    <div class="card-header">
        <a class ="btn btn-secondary" href="{{route('admin.users.create')}}">Agregar usuario</a>
    </div>

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de un usuario ">

        </div>

        <div class="card-body">
            <table class ="table table-striped"> 
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td whitch="10px"> 
                            <a class = "btn btn-primary" href="{{route('admin.users.edit', $user)}}">Editar</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            

        </div>
    </div>
</div>