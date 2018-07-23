

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Project Management') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}" />
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">




</head>

<body>

<header id="header">
    <div class="container-fluid">
        <div class="row top">
            <div class="col-sm-2 left">
                <div class="logo"><a href="{{ url('/home') }}">{{ config('app.name', 'Laravel') }}</a>

                </div>
            </div>
            <div class="col-sm-10 right">
                <ul>
                    <li class="megemenu"><a href="">{{ Auth::user()->name }}<span class="caret"></span></a>
                        <div class="account">
                            <ul>
                                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                    </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="responsive-icon">
                <span><img src="img/mobile-nav.png" alt=""></span>
            </div>
        </div>
    </div>
</header>


    <div id="main-container">
        <div class="container-fluid">
            <div class="row">
                <div id="sidenav" class="col-md-2 left">
                    <ul>
                        @if(Auth::user()->role >=9)
                        <li class="submenu"><a href="#" onclick="return false;">User Management</a>
                            <ul>
                                <li><a href="{{url('userList')}}">User List</a></li>
                                <li><a href="{{url('/register')}}">ADD User</a></li>
                            </ul>
                        </li>
                        @endif
                            @if(Auth::user()->role >=5)
                        <li class="submenu"><a href="#" onclick="return false;">Project Management</a>
                            <ul>
                                <li><a href="{{url('project')}}">Project List</a></li>
                                <li><a href="{{url('project/create')}}">ADD Project</a></li>
                            </ul>
                        </li>
                            @endif
                            <li>
                                <a href="{{url('project')}}">Task List</a>
                            </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-10 right">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>




