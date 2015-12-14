<!-- Modal -->
<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Register</h4>
            </div>
            <div class="modal-body">

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

                    {!! Form::label('password', 'Password:', ['class' => 'col-md-3 control-label']) !!}

                    <div class="col-md-8">

                        {!! Form::password('password', ['class' => 'form-control',  'placeholder' => 'password']) !!}

                    </div>

                </div>

                <div class="form-group">

                    {!! Form::label('password_confirmation', 'Password re-type:', ['class' => 'col-md-3 control-label']) !!}

                    <div class="col-md-8">

                        {!! Form::password('password_confirmation', ['class' => 'form-control',  'placeholder' => 'retype password']) !!}

                    </div>

                </div>


                <div class="form-group">

                    <div class="col-md-8 col-md-offset-3">

                        {!! Form::submit('Register', ['class' => 'my-btn form-control']) !!}

                    </div>

                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <a href="{{ url('login/facebook') }}"><button class="btn btn-primary">facebook</button></a>
                        <a href="{{ url('login/google') }}"><button class="btn btn-primary">google+</button></a>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
            {{--<div class="modal-footer">--}}
            {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
            {{--</div>--}}
        </div>

    </div>


</div>