@extends('layouts.user.main')
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
                            <td>
                                @if($book->bookState == 'Mevcut')
                                    <a class="btn btn-primary" href="{{route('hire.add', $book->id)}}">Kirala</a>
                                @else
                                    <button class="disabled btn btn-danger">Kitap Mevcut Degil</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
