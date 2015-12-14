@extends('layouts.master')


@section('content')

    <div class="page-not-found">

        <h1>Ooops.. </br>
            Looks like the page you are looking for does not exist.</h1>
        <a href="{{ route('home') }}"><-- go to home page</a>

    </div>

@stop