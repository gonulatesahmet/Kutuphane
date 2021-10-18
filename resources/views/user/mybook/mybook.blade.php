@extends('layouts.user.main')
@section('content')
    <div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Mevcut Kitaplar</h2>
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
                <table id="datatable-keytable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Kitap Ad</th>
                        <th>Yazar Ad</th>
                        <th>Kategori</th>
                        <th>Tarih</th>
                        <th>Durum</th>
                        <th>*</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($currentBookList as $current)
                        <tr>
                            <td class="text-center">{{$current->bookName}}</td>
                            <td class="text-center">{{$current->fullName}}</td>
                            <td class="text-center">{{$current->categoryName}}</td>
                            <td class="text-center">{{$current->date}}</td>
                            <td class="text-center">{{$current->hireState}}</td>
                            <td>
                                <form action="{{route('hire.update',$current->id)}}" method="post">
                                    @csrf
                                    <input type="submit" class="btn btn-primary" value="Teslim Et">
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
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
                        <th>Yazar Ad</th>
                        <th>Kategori</th>
                        <th>Tarih</th>
                        <th>Durum</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pastBookList as $past)
                        <tr>
                            <td class="text-center">{{$past->bookName}}</td>
                            <td class="text-center">{{$past->fullName}}</td>
                            <td class="text-center">{{$past->categoryName}}</td>
                            <td class="text-center">{{$past->date}}</td>
                            <td class="text-center">{{$past->hireState}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
