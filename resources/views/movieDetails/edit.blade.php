@extends('welcome')

@section('content')

<form class="form-horizontal" action="{{url('movieDetails/'.$id)}}" method="POST">
        <input name="_method" value="PUT" type="hidden">
    @include('movieDetails._form')
</form>

@stop

