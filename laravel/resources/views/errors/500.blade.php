@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code')
<div class="error-page">
<h2 class="headline text-danger" style="font-size: 100px">500</h2>
</div>
@endsection
@section('message')
<div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Page not found.</h3>
            <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href="/88823665-camp-66/laravel/home">return to dashboard</a> or try using the search form.
            </p>
            <form class="search-form">
                <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                    </button>
                </div>
                </div>
            </form>
</div>
@endsection