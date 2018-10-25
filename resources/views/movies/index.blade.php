@extends('welcome')


@section('content')



<div class="container-fluid">
    
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"> <a href="{{route('movies.create')}}" class="btn btn-primary">Crear Movie</a></div>
    <div class="col-sm-4"></div>
       
    </div>
<div class="row">
<table class="table table-striped">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>Acciones</th>
    </tr>
    @foreach($data as $datum)

    <tr>
        <td>{{$datum['id']}}</td>
        <td>{{$datum['title']}}</td>
        <td><a class="btn btn-success" href="{{route('movies.edit',['movie_id'=>$datum['id']])}}">Editar</a>
            <form action="{{ route('movies.destroy', ['movie_id'=>$datum['id']]) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger">Delete</button>
            </form></td>
    </tr>

    @endforeach


</table>
</div>
</div>


@stop