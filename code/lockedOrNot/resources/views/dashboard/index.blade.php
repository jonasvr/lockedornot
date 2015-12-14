@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

    <div class="container-fluid">

        <div class="content-main">
        <div style='border: 1px solid gainsboro' class="col-lg-2 col-sm-12">
        @include('partials.sidebar')
        </div>

        <div class="col-lg-8 col-sm-12">
        <h1>Dashboard</h1>

        <div style="border: 1px solid gainsboro" class="col-lg-6 col-sm-12">
        <h2>Personal statistics</h2>
        </div>
        </div>
        </div>
    </div>

    @stop