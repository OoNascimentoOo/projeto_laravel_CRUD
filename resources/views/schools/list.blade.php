@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{url('schools/new')}}">To add new school -> </a></div>
                <div class="card-header"><a href="{{url('home/')}}"> <- To return the principal menu</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Schools List:</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">School:</th>
                                    <th scope="col">City:</th>
                                    <th scope="col">Edit:</th>
                                    <th scope="col">Delete:</th>
                                </tr>
                            </thead>
                        <tbody>
                    @foreach ($schools as $school)
                            <tr>
                                <th scope="row">{{$school->id}}</th>
                                <td>{{$school->name}}</td>
                                <td>{{$school->city}}</td>
                                <td>
                                     <a href="schools/{{ $school->id }}/edit" class="btn btn-info">Edit</button>
                                </td>
                                <td>
                                    <form action="schools/delete/{{ $school->id }}" method="post">
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
