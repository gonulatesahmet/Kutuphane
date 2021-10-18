@extends('layouts.admin.main')
@section('content')

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
                <form action="{{route('book.updatepost', $book->id)}}" method="post">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Kitap Bilgileri</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="bookName">Kitap Ad</label>
                                    <input type="text" id="bookName" class="form-control" name="bookName" value="{{$book->bookName}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="bookCode">Kitap Kod</label>
                                    <input type="text" id="bookCode" class="form-control" name="bookCode" value="{{$book->bookCode}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="bookDescription">Kitap Açıklama</label>
                                    <textarea rows="1" id="bookDescription" name="bookDescription" class="form-control">{{$book->bookDescription}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pageCount">Sayfa Sayısı</label>
                                    <input type="text" id="pageCount" class="form-control" name="pageCount" value="{{$book->pageCount}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="price">Fiyat</label>
                                    <input type="text" id="price" class="form-control" name="price" value="{{$book->price}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="categoryID">Kategori</label>
                                    <select class="form-control" name="categoryId">
                                        @foreach($categoryList as $category)
                                            <option value="{{$category->id}}" {{($category->id == $book->categoryId) ? 'selected' : ''}}>{{$category->categoryName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Yazar</label>
                                    <select class="form-control" name="authorId">
                                        @foreach($authorList as $author)
                                            <option value="{{$author->id}}" {{($author->id == $book->authorId) ? 'selected' : ''}}>{{$author->fullName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Kitap Guncelle">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
