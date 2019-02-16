@extends('layouts.master')
@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            @include('layouts.errors')
            <div class="card">
                <div class="card-body">
                    <form action="/dashboard/cars" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="brand_name">Brand Name</label>
                            <input value="{{old('brand_name')}}" id="brand_name" name="brand_name" type="text"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input id="year" value="{{old("year")}}" name="year" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input id="image" value="{{old("image")}}" name="image" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection