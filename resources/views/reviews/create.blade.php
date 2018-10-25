@extends('welcome')

@section('content')

<form class="form-horizontal" action="{{route('reviews.store')}}" method="POST">
    @include('reviews._form')
</form>

@stop

