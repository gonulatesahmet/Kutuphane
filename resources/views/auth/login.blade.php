@extends('layouts.guest.main')
@section('content')
    <div class="login_wrapper">
        <div class="animate form login_form">
    <section class="login_content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Giris Yap</h1>
            <div>
                <input type="email" class="form-control" name="email" required=""/>
            </div>
            <div>
                <input type="password" class="form-control" name="password" autocomplete="current-password" required="" />
            </div>
            <div>
                <input type="submit" value="Giris Yap" class="btn btn-default">

            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">
                    Admin Giris => admin@admin.com / 123123123 <br>
                    Kullanici Giris => gonulates.ahmet@gmail.com / 123123123
                </p>
                <div class="clearfix"></div>
                <br />
            </div>
        </form>
    </section>
        </div>
    </div>
@endsection


        <!-- Session Status -->


        <!-- Validation Errors -->

