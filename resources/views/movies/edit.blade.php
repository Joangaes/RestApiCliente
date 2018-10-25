@extends('welcome')

@section('content')

<form class="form-horizontal" action="{{url('movies/'.$id)}}" method="POST">
        <input name="_method" value="PUT" type="hidden">
    @include('movies._form')
</form>

@stop

