@extends('welcome')

@section('content')

<form class="form-horizontal" action="{{route('movies.store')}}" method="POST">
    @include('movies._form')
</form>

@stop

