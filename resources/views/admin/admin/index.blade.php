@extends('layouts.admin.main')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Yazar</h2>
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
                        <th>Ad</th>
                        <th>Doğum Tarihi</th>
                        <th>Yaşı</th>
                        <th>E-Mail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($adminList as $admin)
                        <tr>
                            <td class="text-center">{{$admin->fullName}}</td>
                            <td class="text-center">{{$admin->birthDate}}</td>
                            <td class="text-center">{{$admin->age}}</td>
                            <td class="text-center">{{$admin->email}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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
@endsection
