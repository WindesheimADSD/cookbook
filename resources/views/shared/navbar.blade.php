<nav class="navbar navbar-default ">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/images/l01.png" width="20%">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
            <!-- Dropdown lessons -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Recipes
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/r101') }}">Recipe 101</a></li>
                        <li><a href="#">Recipe 102</a></li>
                        <li><a href="#">Recipe 103</a></li>
                        <li><a href="#">Recipe 104</a></li>
                        <li><a href="#">Recipe 105</a></li>
                        <li><a href="{{ url('/r106') }}">Recipe 106</a></li>
                        <li><a href="{{ url('/blog') }}">Recipe 107</a></li>
                        <li><a href="#">Recipe 108</a></li>
                        <li><a href="#">Recipe 109</a></li>
                        <li><a href="#">Recipe 110</a></li>
                        <li><a href="#">Recipe 201</a></li>
                        <li><a href="#">Recipe 202</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/blog">Blog</a>
                </li>
                <li>
                    <a href="{{ url('/about') }}" class="navbbar-item">About</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}" class="navbbar-item">Contact</a>
                </li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Member
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/login') }}" class="navbar-item">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        </ul>
                    </li>
                @else
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Member
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}</a></li>
                            <li>                        <a href="{{ url('/logout') }}"
                                                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout
                                </a>
                            </li>

                        </ul>
                    </li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

                @endif
            </ul>
        </div>
    </div>
</nav>
