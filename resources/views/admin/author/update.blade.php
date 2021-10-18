@extends('layouts.admin.main')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Yazar Guncelle</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form action="{{route('author.updatepost', $author->id)}}" method="post">
                    @csrf
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Adi</label>
                                    <input type="text" id="input-username" class="form-control" name="fullName" value="{{$author->fullName}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="birthDate">Dogum Tarihi</label>
                                    <input type="date" id="birthDate" class="form-control" name="birthDate" value="{{$author->birthDate}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="dateOfDeath">Ölüm Tarihi</label>
                                    <input type="date" id="dateOfDeath" class="form-control" name="dateOfDeath" value="{{$author->dateOfDeath}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="age">Yaş</label>
                                    <input type="text" id="age" class="form-control" name="age" value="{{$author->age}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-warning" value="Yazar Guncelle">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
