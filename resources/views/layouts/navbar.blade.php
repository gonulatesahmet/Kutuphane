<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search form -->

                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative input-group-merge">
                        <a class="nav-link" href="#">Kutuphane</a>
                    </div>
                </div>


@if(Route::has('login'))
            <ul class="navbar-nav align-items-center  ml-md-auto ">
                @auth()
                    @if(auth()->user()->userType == 'Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Anasayfa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Yazar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kitap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kullanici</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->fullName}}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>Profil</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Cikis Yap</span>
                                </a>
                            </div>
                        </li>
                    @endif
                    @elseif(auth()->user()-userType == 'user')
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kitaplarim</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <div class="media-body  ml-2  d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->fullName}}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>Profil</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Cikis Yap</span>
                            </a>
                        </div>
                    </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Giris Yap</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kayit Ol</a>
                        </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
