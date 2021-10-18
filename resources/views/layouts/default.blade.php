<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
<div class="main-content" id="panel">
@include('layouts.navbar')

    @yield('content')
</div>
</body>
@include('layouts.under')
</html>
