<header id="main-header">
    <div class="header-top">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img alt="Logo" src="{{ asset('img/logo/logo-invert.png') }}">
                </a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/how-to-host">Sublet</a>
                    </li> 
                    <li>
                        <a href="{{ URL::route('how-it-works') }}">How it works</a>
                    </li> 

                @guest
                <li>
                    <a href="{{ route('register') }}">Sign Up</a>
                </li>
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li> 
                @else

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->first_name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/users/property">My Listings</a>
                            </li>
                            <li>
                                <a href="{{ '/users/'.auth()->user()->id.'/edit' }}">My Account</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        {{--         
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <a class="logo" href="/">
                       <img src="{{ asset('img/logo/v0.svg') }}" style="max-height: 60px; height: inherit" alt="Subletor" title="Subletor" />
                    </a>
                </div>
                <div class="col-md-4">
                </div>    
                <div class="col-md-4">
                    <div class="top-user-area clearfix">
                        <ul class="top-user-area-list list list-horizontal list-border">
                            <li>
                                <a href="/host">Sublet</a>
                            </li>
                            @guest
                            <li>
                                <a href="{{ route('register') }}">Sign Up</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li> 
                            @else

                            <li class="nav-drop top-user-area-avatar">
                                <a href="#">
                                    <img class="origin round" src="{{ asset('img/amaze_40x40.jpg') }}" alt="Image Alternative text" title="AMaze" /><i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i>
                                </a>
                                <ul class="list nav-drop-menu">
                                    <li>
                                        <a href="{{ '/users'.auth()->user()->id.'/edit' }}">Edit profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest  
                            <li>
                                <a href="{{ URL::route('how-it-works') }}">How it works</a>
                            </li>                       
                        </ul>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
         --}}
    </div>
</header>

    