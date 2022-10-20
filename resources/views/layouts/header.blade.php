<header>
    <div class="container">
        <div class="header">
            <div class="header__logo">
                <a href="{{url('/produtos')}}">ClubDev</a>
            </div>
            @if(Auth::check())
                <div class="header__name">
                    <span>{{Auth::user()->name}}</span>
                </div>
                <div class="btnHeader dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        Dashboard
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{url('/produtos/dashboard')}}">Produtos</a>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a class="btnHeader" href="{{url('/logoff')}}">Logoff</a></li>
                    </ul>
                </nav>
            @else
                <nav>
                    <ul>
                        <li><a class="btnHeader" href="{{url('/login')}}">Login</a></li>
                    </ul>
                </nav>

            @endif
        </div>
    </div>
</header>
<header class="subHeader">
    <div class="container">
        <div class="subHeader__nav">
            <nav>
                <ul>
                    <li><a href="{{url('/produtos')}}">Produtos</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
