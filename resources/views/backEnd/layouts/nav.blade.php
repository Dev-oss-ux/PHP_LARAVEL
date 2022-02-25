<!--sidebar-menu-->
<!--logo -->
<div id="bloc_page">
    <img src="../img/logo.png" alt="Logo_page" title="Accueil" id="logo" style="
    width: 221px;
    margin-top: -106px;"/>
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li{{$menu_active==1? ' class=active':''}}><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Ajouter un nouveau Categorie</a></li>
                <li><a href="{{route('category.index')}}">Liste des Categories</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Articles</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Aouter de nouveaux Articles</a></li>
                <li><a href="{{route('product.index')}}">Liste des Articles</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Coupons</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">Ajouter un Coupon</a></li>
                <li><a href="{{route('coupon.index')}}">Liste des Coupons</a></li>
            </ul>
        </li>
        <!-- Demande de validation -->

    </ul>
</div>
<!--sidebar-menu-->
