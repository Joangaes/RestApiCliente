@extends('welcome')


@section('content')



<div class="container-fluid">
    
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"> <a href="{{route('reviews.create')}}" class="btn btn-primary">Crear Review</a></div>
    <div class="col-sm-4"></div>
       
    </div>
<div class="row">
<table class="table table-striped">
    <tr>
        <th>Text</th>
        <th>Reviewer</th>
        <th>Acciones</th>
    </tr>
    @foreach($data as $datum)

    <tr>
        <td>{{$datum['reviewer']}}</td>
        <td>{{$datum['text']}}</td>
        <td><a href="{{route('reviews.edit',['review_id'=>$datum['id']])}}">Editar</a></td>
    </tr>

    @endforeach


</table>
</div>
</div>


@stop