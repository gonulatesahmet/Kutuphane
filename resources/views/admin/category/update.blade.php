@extends('layouts.admin.main')
@section('content')
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
            <form action="{{route('category.updatepost', $category->id)}}" method="post">
                @csrf
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="categoryName">Kategori Ad</label>
                                <input type="text" id="categoryName" class="form-control" name="categoryName" value="{{$category->categoryName}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="categoryCode">Kategori Kod</label>
                                <input type="text" id="categoryCode" class="form-control" name="categoryCode" value="{{$category->categoryCode}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label" for="categoryDescription">Kategori Açıklama</label>
                                <textarea rows="1" id="categoryDescription" class="form-control" name="categoryDescription">{{$category->categoryDescription}}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-control-label" for="categoryState">Kategori Durum</label>
                            <select name="categoryState" class="form-control">
                                @if($category->categoryState=='Aktif')
                                    <option value="Aktif" selected>Aktif</option>
                                    <option value="Pasif">Pasif</option>
                                @else
                                    <option value="Pasif" selected>Pasif</option>
                                    <option value="Aktif">Aktif</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <hr class="my-4" />
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Kategori Guncelle">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
