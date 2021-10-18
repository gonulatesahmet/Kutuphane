<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('layouts.guest.navbar')
        <div class="right_col" role="main">
            <div class="">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
@include('layouts.under')
</html>
