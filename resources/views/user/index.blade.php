@extends('layouts.user.main')
@section('content')
    <div class="x_content">
        <div class="row">
            <div class="col-md-12 list">
                <!-- price element -->


                @foreach($bookList as $book)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricing">
                        <div class="title">
                            <h1>{{$book->bookName}}</h1>
                        </div>
                        <div class="x_content">
                            <div class="">
                                <div class="pricing_features">
                                    <ul class="list-unstyled text-left">
                                        <li><i class="fa fa-circle text-primary"></i><strong> Aciklama : </strong>
                                            {{$book->bookDescription}}</li>
                                        <li><i class="fa fa-circle text-primary"></i><strong> Yazar : </strong> {{$book->fullName}}</li>
                                        <li><i class="fa fa-circle text-primary"></i><strong> Kategori : </strong>
                                            {{$book->categoryName}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing_footer">
                                <a class="btn btn-primary" href="{{route('hire.add', $book->id)}}">Kirala</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>





@endsection

