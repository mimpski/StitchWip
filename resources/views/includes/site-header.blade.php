@if(Auth::user()['role']=='superadmin')
<header class="header header--standard-dark superadmin-header">
    <div class="container">
        <div class="row">
        <div class="header-content-wrapper">
            <div class="page-title">
            <h2>Welcome SuperAdmin!</h2>
            </div>
            <div class="nav nav-pills nav1 header-menu">
                <div class="mCustomScrollbar ps ps--theme_default ps--active-y" style="overflow: visible!important">
                    <ul>
                        <li class="nav-item">
                            <a href="/superadmin" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/users" class="nav-link">Users</a>
                        </li>
                        <li class="nav-item">
                            <a href="/superadmin/news" class="nav-link">Site News</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
</header>
@endif
<header class="header header--standard-dark" id="site-header">
    <div class="container">
        <div class="row">
        <div class="header-content-wrapper">
             
            <div class="page-title">
                <a href="/" class="logo">
                    <div class="img-wrap">
                        <img src="/img/stitch-wip-logo.png" alt="StitchWip">
                    </div>
                </a> 
            </div>
            <div class="nav nav-pills nav1 header-menu">
                <div class="mCustomScrollbar ps ps--theme_default ps--active-y" style="overflow: visible!important">
                    <ul>
                        <li class="nav-item">
                            <a href="/forums" class="nav-link">Forum</a>
                        </li>
                        <li class="nav-item dropdown">
                        @guest
                            <a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex="2">Account</a>
                            <div class="dropdown-menu">      
                                <a class="dropdown-item" href="/">{{ __('Register') }}</a>
                                <a class="dropdown-item" href="/">{{ __('Login') }}</a>
                            </div>
                        @else
                            <a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex="1">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu">            
                                <a class="dropdown-item" href="/profile/{{Auth::user()->name}}">Profile</a>
                                <a class="dropdown-item" href="/profile/{{Auth::user()->name}}/threads">Thread Manager</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                            </div>
                        @endif
                        </li>
                        
                        
                        <li class="close-responsive-menu js-close-responsive-menu">
                            <svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
                        </li>
                    </ul>
                <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 73px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 30px;"></div></div></div>
            </div>
        
        </div>
        </div>
    </div>
    </header>