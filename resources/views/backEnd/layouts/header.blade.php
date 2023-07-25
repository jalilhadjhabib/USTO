<!--Header-part-->

<div id="header" style="background-color: black;">
    <h1><a href="dashboard.html">Laravel Admin</a></h1>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse" style="background-color: black;">
    <ul class="nav">
        <li class=""><a title="" href="{{url('/admin/settings')}}"><i class="icon icon-cog"></i> <span class="text">Paramètres</span></a></li>
        <li class="">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="icon icon-share-alt"></i>{{ __('Se déconnecter') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->