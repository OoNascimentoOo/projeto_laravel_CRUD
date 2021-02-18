@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Welcome to school system:</h1>
                    <a href="{{url('schools')}}">Go to schools list -> </a>
                </div>
            </div>


            <div class="card">
                <div class="card-header">{{ __('List') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Welcome to course system:</h1>
                    <a href="{{url('courses')}}">Go to course list -> </a>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
