@extends('layouts.guest.main')
@section('content')
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Toplam Kullanici</span>
            <div class="count">
                @if($totalUser == null)
                    --
                @else
                    {{$totalUser}}
                    @endif
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Toplam Kiralama</span>
            <div class="count">
                @if($totalHire == null)
                    0
                @else
                    {{$totalHire}}
                    @endif
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Toplam Kitap</span>
            <div class="count green">
                @if($totalBook == null)
                    --
                @else
                    {{$totalBook}}
                @endif
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> En Fazla Kitap Kiralayan Kullanici</span>
            <div class="tile_count">
                <h2>
                @foreach($topUser as $user)
                        {{$topUser[0]->fullName}} - {{$topUser[0]->count}}
                    @endforeach
                </h2>
            </div>

        </div>
@endsection
