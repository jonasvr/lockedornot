<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">
            {{--<img class="logo" src="/img/logo.png" alt="Logo Locked Or Not"/>--}}
        </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('home') }}">locked Or Not</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right">

            @if ( Auth::guest() )

                <li><a href="" id="login" data-toggle="modal" data-target="#loginModal" >Login</a></li>

                <li><a href="" id="register" data-toggle="modal" data-target="#registerModal" >Register</a></li>

                {{--<li><a href="{{ route('register') }}" >Register</a></li>--}}
            @else

                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->full_name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>


                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                        {{--{{ Auth::user()->full_name }} <span class="caret"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="{{ route('profile.show', str_replace(' ', '-', Auth::user()->full_name)) }}">My profile</a></li>--}}
                        {{--<li><a href="{{ url('logout') }}">Logout</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                <li>
                    {{--@if( count($auth->avatar) )--}}

                    {{--<img class="avatars" src="{{ route('getImage', [$auth->avatar->filename, 'x-small']) }}" alt="{{  $auth->avatar->name }}" width="40">--}}

                    {{--@endif--}}
                </li>

            @endif
        </ul>
    </div>

</nav>
