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
                        <th>Yazar Ad</th>
                        <th>Doğum Tarihi</th>
                        <th>Ölüm Tarihi</th>
                        <th>Yaşı</th>
                        <th>Kitap Sayısı</th>
                        <th>*</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authorList as $author)
                    <tr>
                        <td class="text-center">{{$author->fullName}}</td>
                        <td class="text-center">{{$author->birthDate}}</td>
                        <td class="text-center">{{$author->dateOfDeath}}</td>
                        <td class="text-center">{{$author->age}}</td>
                        <td class="text-center">
                            {{\Illuminate\Support\Facades\DB::table('book')->select('kitapSayi')->where('authorId','=',$author->id)->count()}}
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-md-6"><a class="btn btn-warning" href="{{route('author.update', $author->id)}}">Guncelle</a></div>
                                <div class="col-md-6"><form action="{{route('author.delete',$author->id)}}" method="post">
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
    <div class="col-md-12 col-sm-12 col-xs-12">
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
                <form action="{{route('author.add')}}" method="post">
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

@endsection
