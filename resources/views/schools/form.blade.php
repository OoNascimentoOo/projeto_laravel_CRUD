@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('schools') }}"> <- Return to previous menu</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if( Request::is('*/edit'))
                    <form action="{{ url('schools/update') }}/{{ $school->id }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">School Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $school->name  }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">City Name:</label>
                        <input type="text" name="email" class="form-control" value="{{ $school->city }}">
                      </div>

                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                    @else

                    <form action="{{ url('schools/add') }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">School Name:</label>
                        <input type="text" name="name" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">City Name:</label>
                        <input type="text" name="city" class="form-control">
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
