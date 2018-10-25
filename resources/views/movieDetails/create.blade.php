@extends('welcome')

@section('content')

<form class="form-horizontal" action="{{route('movieDetails.store')}}" method="POST">
    @include('movieDetails._form')
</form>

@stop

