@extends('layouts.admin.main')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Kiralanan Kitaplar</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-keytable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Kullanıcı Ad</th>
                        <th>Kitap Ad</th>
                        <th>Yazar Ad</th>
                        <th>Kategori</th>
                        <th>Tarih</th>
                        <th>Durum</th>
                        <th>*</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hireList as $hire)
                        <tr>
                            <td class="text-center">{{$hire->userName}}</td>
                            <td class="text-center">{{$hire->bookName}}</td>
                            <td class="text-center">{{$hire->fullName}}</td>
                            <td class="text-center">{{$hire->categoryName}}</td>
                            <td class="text-center">{{$hire->date}}</td>
                            <td class="text-center">{{$hire->hireState}}</td>
                            <td>
                                <form action="{{route('hire.delete',$hire->id)}}" method="post">
                                    @csrf
                                    <input type="submit" class="btn btn-danger" value="Sil">
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
