@extends('layouts.default')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <div class="login-page">
        <div class="error-page">
            @yield('code')
            <div class="error-content">
                @yield('message')
            </div>
        </div>
    </div>
@endsection