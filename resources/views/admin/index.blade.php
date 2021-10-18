@extends('layouts.admin.main')
@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Admin Anasayfa</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Yazar</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="{{route('add.author')}}" method="post">
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Adi</label>
                                        <input type="text" id="input-username" class="form-control" name="fullName">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="birthDate">Dogum Tarihi</label>
                                        <input type="date" id="birthDate" class="form-control" name="birthDate">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="dateOfDeath">Ölüm Tarihi</label>
                                        <input type="date" id="dateOfDeath" class="form-control" name="dateOfDeath">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="age">Yaş</label>
                                        <input type="text" id="age" class="form-control" name="age">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" value="Yazar Ekle">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Kategori</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="{{route('add.category')}}" method="post">
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="categoryName">Kategori Ad</label>
                                        <input type="text" id="categoryName" class="form-control" name="categoryName">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="categoryCode">Kategori Kod</label>
                                        <input type="text" id="categoryCode" class="form-control" name="categoryCode">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="categoryDescription">Kategori Açıklama</label>
                                        <textarea rows="1" id="categoryDescription" class="form-control" name="categoryDescription"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" value="Kategori Ekle">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Kitap</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="{{route('add.book')}}" method="post">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Kitap Bilgileri</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="bookName">Kitap Ad</label>
                                        <input type="text" id="bookName" class="form-control" name="bookName">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="bookCode">Kitap Kod</label>
                                        <input type="text" id="bookCode" class="form-control" name="bookCode">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="bookDescription">Kitap Açıklama</label>
                                        <textarea rows="1" id="bookDescription" name="bookDescription" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pageCount">Sayfa Sayısı</label>
                                        <input type="text" id="pageCount" class="form-control" name="pageCount">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="price">Fiyat</label>
                                        <input type="text" id="price" class="form-control" name="price">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="categoryID">Kategori</label>
                                        <select class="form-control" name="categoryId">
                                            @foreach($categorylist as $category)
                                                <option value="{{$category->id}}">{{$category->categoryName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Yazar</label>
                                        <select class="form-control" name="authorId">
                                            @foreach($authorlist as $author)
                                                <option value="{{$author->id}}">{{$author->fullName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />

                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" value="Kitap Ekle">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Personel</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form method="POST" action="{{ route('add.admin') }}">
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="fullName">Personel Ad</label>
                                        <input type="text" id="fullName" class="form-control" name="fullName">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="birthDatea">Dogum Tarihi</label>
                                        <input type="date" id="birthDatea" class="form-control" name="birthDate">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="agea">Yaş</label>
                                        <input type="text" id="agea" class="form-control" name="age">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">E-Mail</label>
                                        <input type="email" id="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Şifre</label>
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />

                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" value="Personel Ekle">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection

