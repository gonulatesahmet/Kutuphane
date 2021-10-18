<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('user')}}" class="site_title"><i class="fa fa-paw"></i> <span>Kutuphane</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">

            <div class="profile_info">
                <h2>{{auth()->user()->fullName}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a href="{{route('user.profile')}}"><i class="fa fa-user"></i>Profil</a>
                    </li>
                    <li>
                        <a href="{{route('user.book')}}"><i class="fa fa-book"></i>Kitaplar</a>
                    </li>
                    <li>
                        <a href="{{route('user.mybook')}}"><i class="fa fa-bookmark"></i>Kitaplarım</a>
                    </li>


                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <input type="submit" value="Cikis Yap" class="btn">
            </form>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
