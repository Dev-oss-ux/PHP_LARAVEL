<header id="header"><!--Le header-->
    <div class="header_top"><!--Haut du header-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> 0000000000</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@cci-alsace.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle"><!--milieu du header-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/logo.png')}}" alt="" style="height: 52px;"/></a
                    </div>

                <div class="col-sm-8">
                    <div class="shop-menu pull-right"  style="margin-right: -1053px; margin-top: -45px;">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Commande</a></li>
                            @if(Auth::check())
                                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> Mon compte</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i>Se déconncter </a>
                                </li>
                            @else
                                <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Se Connecter</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/')}}" class="active">Accueil</a></li>
                            <li class="dropdown"><a href="#"><i class="fa fa-angle-down">Tous</i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{url('/list-products')}}">Produits</a></li>
                                    <li><a href="{{url('/viewcart')}}"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
