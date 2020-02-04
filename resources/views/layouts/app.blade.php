<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Sinner's Blog") }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    
    @stack('styles')

</head>
<body>
    <div id="app">
        <!-- header nav bar -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container h5 text-secondary">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Sinner') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                    {{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- body container -->
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <!-- checking for authentication -->
                    @if(Auth::check())
                    <div class="col-lg-3 col-md-3">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('dashboard') }}" class="h5 text-success">
                                Admin Panel</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('post.create') }}" class="h5 text-success"> 
                                Create New Post</a>
                            </li>

                            <li class="list-group-item">
                                <a href="{{ route('post')}}" class="h5 text-success">
                                Published Posts</a>
                            </li>

                            <li class="list-group-item">
                                <a href="{{ route('tags') }}" class="h5 text-success">
                                Show Tags</a>
                            </li>
                            
                            <li class="list-group-item">
                                <a href="{{ route('category') }}" class="h5 text-success">
                                Show Categories</a>
                            </li>                          
                            
                            <li class="list-group-item">
                                <a href="{{ route('post.drafts') }}" class="h5 text-success">
                                Saved Drafts</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('profile') }}" class="h5 text-success">
                                My Profile</a>
                            </li>
                              <li class="list-group-item">
                                <a href="{{ route('post.recycle') }}" class="h5 text-success">
                                Recycle Bin</a>
                            </li>
                        @if(Auth::user()->admin != 0)

                            <li class="list-group-item">
                                <a href="{{ route('users') }}" class="h5 text-success">
                                Manage Accounts </a>
                            </li>
                        @endif
                        @if(Auth::user()->admin != 0)
                            <li class="list-group-item">
                                <a href="{{ route('preference.edit') }}" class="h5 text-success">
                                Blog Preferences</a>
                            </li>
                        @endif
                        </ul>
                    </div>
                    @endif
                    <!-- checking for authentication -->
                    <div class="col-lg-9 col-md-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}" ></script>

    @stack('scripts')

    <!-- Toasts Notification -->
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @elseif(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @elseif(Session::has('error'))
            toastr.danger("{{Session::get('error')}}");
        @endif
    </script>

</body>
</html>
