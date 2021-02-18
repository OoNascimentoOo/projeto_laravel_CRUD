@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('courses') }}"> <- Return to previous menu</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if( Request::is('*/edit'))
                    <form action="{{ url('courses/update') }}/{{ $course->id }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $course->name  }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Course School:</label>
                        <input type="text" name="school" class="form-control" value="{{ $course->school  }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Description:</label>
                        <input type="text" name="description" class="form-control" value="{{ $course->description  }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Start Date:</label>
                        <input type="Date" name="start_date" class="form-control" value="{{ $course->start_date }}">
                      </div>

                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                    @else

                    <form action="{{ url('courses/add') }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Name:</label>
                        <input type="text" name="name" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">School Name:</label>
                        <input type="text" name="school" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Description:</label>
                        <input type="text" name="description" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Start Date:</label>
                        <input type="Date" name="start_date" class="form-control">
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
