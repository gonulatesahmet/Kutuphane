@extends('layouts.guest.main')
@section('content')
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <h1>Hesap Olustur</h1>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Isim" required autofocus name="fullName"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" required name="email" placeholder="e-mail" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required name="password"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" required name="password_confirmation"/>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Password" required name="birthDate"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="age" name="age" required />
                        </div>
                        <div class="form-group center">
                            <input type="submit" class="btn btn-default" value="Kayit Ol">
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </form>
                </section>
            </div>
    </div>

@endsection
