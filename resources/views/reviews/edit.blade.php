@extends('welcome')

@section('content')

<form class="form-horizontal" action="{{url('reviews/'.$id)}}" method="POST">
        <input name="_method" value="PUT" type="hidden">
    @include('reviews._form')
</form>

@stop

