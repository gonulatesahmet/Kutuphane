<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('admin')}}" class="site_title"><i class="fa fa-paw"></i> <span>Sayfa Adi</span></a>
        </div>
        <div class="clearfix"></div>
        <div class="profile clearfix">

            <div class="profile_info">
                <h2>{{auth()->user()->fullName}}</h2>
            </div>
        </div>
        <br />
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a href="{{route('author.index')}}"><i class="fa fa-user"></i>Yazar</a>
                    </li>
                    <li>
                        <a href="{{route('category.index')}}"><i class="fa fa-group"></i>Kategori</a>
                    </li>
                    <li>
                        <a href="{{route('book.index')}}"><i class="fa fa-book"></i>Kitap</a>
                    </li>
                    <li>
                        <a href="{{route('hire.index')}}"><i class="fa fa-sellsy"></i>Kiralama</a>
                    </li>
                    <li>
                        <a href="{{route('admin.index')}}"><i class="fa fa-user-plus"></i>Admin</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-footer hidden-small">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <input type="submit" value="Cikis Yap" class="btn">
            </form>
        </div>
    </div>
</div>
