@extends('layouts.master')
@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="row">
                @foreach($users as $user)
                    <div class="col-md-4">
                        <div class="card">

                            <div class="card-body">
                                <h4>{{$user->name}}</h4>
                                <h6>{{$user->email}}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection