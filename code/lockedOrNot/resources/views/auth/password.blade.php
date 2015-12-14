@extends('layouts.master')

@section('content')

    <div class="content-wrap">

        <div class="col-md-5 my-form">

            <div class="panel panel-default">

                <div class="panel-body">


                <h1>Reset Password</h1>

                    @include('errors.errors')

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="my-btn form-control">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection