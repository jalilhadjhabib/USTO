<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class=" {{$menu_active==1? ' active':''}}"><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Acceuil</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Ajouter une nouvelle catégorie</a></li>
                <li><a href="{{route('category.index')}}">Liste des catégories</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Formations</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Ajouter une nouvelle formation</a></li>
                <li><a href="{{route('product.index')}}">Liste des formations</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Planning</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">Ajouter un nouvel planning</a></li>
            </ul>
        </li>
        <li class=" {{$menu_active==5? ' active':''}}"><a href="{{route('newadmin.create')}}"><i class="icon icon-th-list"></i> <span>Créer un Admin</span></a> </li>

    </ul>
</div>
<!--sidebar-menu-->