{{-- @extends('layouts.app') --}}
@extends('layoute.master')
@section('title', 'Dashboard')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Blog Post') }}</div>

                <div class="card-body">
                    <form action="">
                    <div class="form-group">
                        <label for="">Blog Title</label>
                        <input type="email" class="form-control" id="" placeholder="Blog Title">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlTextarea1">Blog Body</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <button class="btn btn-primary new-blog-btn mt-2" type="submit">Submit Blog</button>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
