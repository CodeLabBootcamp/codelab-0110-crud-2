@extends('layouts.master')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h4 class="m-0">Cars</h4>
                        </div>
                        <div class="col-auto">
                            <a  class="btn btn-primary" href="/cars/create">Create new car</a>

                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Brand Name</th>
                        <th>Year</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{$car->id}}</td>
                            <td>{{$car->brand_name}}</td>
                            <td>{{$car->year}}</td>
                            <td>
                                <div class="btn-group" role="group" >
                                    <a class="btn btn-warning" href="/cars/{{$car->id}}/edit">Edit</a>
                                    <form action="/cars/{{$car->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection