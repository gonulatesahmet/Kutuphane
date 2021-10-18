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
                        <th>Kategori Ad</th>
                        <th>Kategori Kod</th>
                        <th>Kategori Açıklama</th>
                        <th>Kategori Durum</th>
                        <th>*</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categoryList as $category)
                        <tr>
                            <td class="text-center">{{$category->categoryName}}</td>
                            <td class="text-center">{{$category->categoryCode}}</td>
                            <td class="text-center">{{$category->categoryDescription}}</td>
                            <td class="text-center">{{$category->categoryState}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6"><a class="btn btn-warning" href="{{route('category.update', $category->id)}}">Guncelle</a></div>
                                    <div class="col-md-6"><form action="{{route('category.delete', $category->id)}}" method="post">
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
        <div class="col-md-12 col-sm-12 col-xs-12">
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
                    <form action="{{route('category.add')}}" method="post">
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
@endsection
