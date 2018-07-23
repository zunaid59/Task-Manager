<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>
<body>
<header id="header">
    <div class="container-fluid">
        <div class="row top">
            <div class="col-sm-2 left">
                <div class="logo"><a href="{{url('/home')}}">{{ config('app.name', 'Project Management') }}</a>

                </div>
            </div>
            <div class="col-sm-10 right">
                <ul>
                    @guest @else
                        <li class="megemenu"><a href="">{{ Auth::user()->name }} </a>
                            <div class="account">
                                <ul>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </li>
                        @endguest
                </ul>
                Chat Conversation End
                Type a message...

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
            <div class="col-md-10 right">
                <div class="content">
                   @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('admin/js/script.js') }}"></script>
</body>

</html>
