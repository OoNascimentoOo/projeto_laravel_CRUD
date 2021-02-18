@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{url('courses/new')}}">To add new course -> </a></div>
                <div class="card-header"><a href="{{url('home/')}}"> <- To return the principal menu</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Courses List:</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name:</th>
                                    <th scope="col">School:</th>
                                    <th scope="col">Description:</th>
                                    <th scope="col">Start Date:</th>
                                </tr>
                            </thead>
                        <tbody>
                    @foreach ($courses as $course)
                            <tr>
                                <th scope="row">{{$course->id}}</th>
                                <td>{{$course->name}}</td>
                                <td>{{$course->school}}</td>
                                <td>{{$course->description}}</td>
                                <td>{{$course->start_date}}</td>
                                <td>
                                     <a href="courses/{{ $course->id }}/edit" class="btn btn-info">Edit</button>
                                </td>
                                <td>
                                    <form action="courses/delete/{{ $course->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
