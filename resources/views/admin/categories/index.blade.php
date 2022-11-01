@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categorias</h1>
@stop



@section('content')
<div class="card">
    @can('admin.categories.create');
    <div class="card-header">
        <a class ="btn btn-secondary" href="{{route('admin.categories.create')}}">Agregar categoria</a>
    </div>
    @endcan

    <div class = "card-body">
        <table class = "table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td width="10px">
                            @can('admin.categories.edit')
                            <a class ="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar</a>
                            @endcan
                        </td>
                        <td width="10px">
                        @can('admin.categories.destroy')
                        <a class ="btn btn-danger btn-sm" href="{{route('admin.categories.destroy', $category)}}">eliminar</a>
                            @endcan
                            
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@stop