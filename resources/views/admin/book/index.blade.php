@extends('layouts.admin.main')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Kategori</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Kitap Ad</th>
                        <th>Kitap Kod</th>
                        <th>Kitap Açıklama</th>
                        <th>Sayfa Sayisi</th>
                        <th>Fiyat</th>
                        <th>Kategori</th>
                        <th>Yazar</th>
                        <th>Kitap Durum</th>
                        <th>*</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bookList as $book)
                        <tr>
                            <td class="text-center">{{$book->bookName}}</td>
                            <td class="text-center">{{$book->bookCode}}</td>
                            <td class="text-center">{{$book->bookDescription}}</td>
                            <td class="text-center">{{$book->pageCount}}</td>
                            <td class="text-center">{{$book->price}}</td>
                            <td class="text-center">{{$book->categoryName}}</td>
                            <td class="text-center">{{$book->fullName}}</td>
                            <td class="text-center">{{$book->bookState}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6"><a class="btn btn-warning" href="{{route('book.update', $book->id)}}">Guncelle</a></div>
                                    <div class="col-md-6"><form action="{{route('book.delete', $book->id)}}" method="post">
                                            @csrf
                                            <input type="submit" class="btn btn-danger" value="Sil">
                                        </form></div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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
                    <form action="{{route('book.add')}}" method="post">
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
                                            @foreach($categoryList as $category)
                                                <option value="{{$category->id}}">{{$category->categoryName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Yazar</label>
                                        <select class="form-control" name="authorId">
                                            @foreach($authorList as $author)
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
    </div>
@endsection
