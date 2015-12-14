@extends('layouts.master')

@section('title', 'Register')

@section('content')

        <h1>Register</h1>

        <div class="panel panel-default">

            @include('errors.errors')

            <div class="panel-body">

                <div class="row">

                    {!!Form::open(['route' =>  ['post-register'], 'class' => 'form-horizontal', 'role' => 'form'])  !!}

                    <div class="form-group">

                        {!! Form::label('device_nr', 'Device Serial Nr:', ['class' => 'col-md-3 control-label']) !!}

                        <div class="col-md-8">

                            {!! Form::text('device_nr',  null, ['class' => 'form-control', 'placeholder' => 'your device serial nr.']) !!}

                        </div>
                    </div>

                    <div class="form-group">

                        {!! Form::label('first_name', 'First Name:', ['class' => 'col-md-3 control-label']) !!}

                        <div class="col-md-8">

                            {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'first name']) !!}

                        </div>
                    </div>

                    <div class="form-group">

                        {!! Form::label('last_name', 'Last Name:', ['class' => 'col-md-3 control-label']) !!}

                        <div class="col-md-8">

                            {!! Form::text('last_name',  null, ['class' => 'form-control', 'placeholder' => 'last name']) !!}

                        </div>
                    </div>

                    {{--<div class="form-group">--}}

                        {{--{!! Form::label('username', 'Username:', ['class' => 'col-md-3 control-label']) !!}--}}

                        {{--<div class="col-md-8">--}}

                            {{--{!! Form::text('username',  null, ['class' => 'form-control', 'placeholder' => 'username']) !!}--}}

                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">

                        {!! Form::label('email', 'E-mail:', ['class' => 'col-md-3 control-label']) !!}

                        <div class="col-md-8">

                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-md-8 col-md-offset-3">

                            {!! Form::submit('Submit', ['class' => 'my-btn form-control']) !!}

                        </div>

                    </div>

                    {!! Form::close() !!}

                </div>

                <hr>

                <div class="row">

                    <div class="form-group">

                        {!! Form::label('social_register', 'Register in one click:', ['class' => 'col-md-8 col-md-offset-3 control-label']) !!}

                        <div class="col-md-8 col-md-offset-3">
                            <a href="{{ url('register/facebook') }}"><button class="btn-fb form-control">facebook</button></a>
                            <a href="{{ url('register/google') }}"><button class="btn-gplus form-control">google+</button></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>


@stop

@section('footer')

@stop
