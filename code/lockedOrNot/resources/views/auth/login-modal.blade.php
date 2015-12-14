<!-- Modal -->
<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
{{--            @include('auth.login')--}}
            {!!Form::open(['route' => 'post-login', 'class' => 'form-horizontal', 'role' => 'form'])  !!}

            <div class="form-group">

                {!! Form::label('email', 'E-mail Address', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">

                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'email']) !!}

                </div>
            </div>

            <div class="form-group">

                {!! Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) !!}

                <div class="col-md-6">

                    {!! Form::password('password', ['class' => 'form-control',  'placeholder' => 'password']) !!}

                </div>

            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">

                    {!! Form::submit('Login', ['class' => 'my-btn form-control']) !!}

                    <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
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