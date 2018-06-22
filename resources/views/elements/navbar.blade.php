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
            <a class="navbar-brand" href="">Odyssey</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{route('shop')}}">Shop</a></li>
                @auth()
                    @if (auth()->user()->role == 'admin')
                        <li><a href="{{ route('Rcon') }}">Rcon</a></li>
                    @endif
                @endauth
            @guest
                <!-- Large modal -->
                    <li> <a type="button" href="{{ login }}" class=" nav-link " data-toggle="modal" data-target=".bs-example-modal-lg"> login</a>

                    </li>

                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else

                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                @endguest
            </ul>
            <form action="" method="get" class="navbar-form navbar-left">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="title" placeholder="Search...">
                    <span class="input-group-btn">
                     <input type="submit" class="btn btn-default" value="Go !">
                        </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Forum</a></li>
                <li class="dropdown">
                    @auth()
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                    @endauth
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>


        <!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>