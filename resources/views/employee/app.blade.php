<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Silah</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-danger" style="background-color: #e3f2fd;">
            <div class="container">
            <img  src="https://cdn-bdmoe.nitrocdn.com/QEBnQnmmJWeMVvUydSCSWWLqUAiDNfuP/assets/static/optimized/rev-39c839b/wp-content/uploads/2020/02/logo_high.png" 
            alt="https://cdn-bdmoe.nitrocdn.com/QEBnQnmmJWeMVvUydSCSWWLqUAiDNfuP/assets/static/optimized/rev-39c839b/wp-content/uploads/2020/02/logo_high.png"
style ="width:130px;height:50px">
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                </a>
               
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                         
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <form action="{{ url('User') }}" method="get">
        {!! csrf_field() !!}

        @if(Auth::user()->admin)
    <div>@else<input type="submit" value="User" class="btn btn-primary"  content="width=device-width, initial-scale=9">@endif</br>
    </form>
                    </ul>
                </div>
            </div>
        </nav>
        

        <main class="left" style="margin-left:150px">
            @yield('content')
        </main>
    </div>
</body>
</html>
