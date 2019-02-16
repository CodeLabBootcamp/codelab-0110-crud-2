@extends('layouts.master')
@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="row">
                @foreach($cars as $car)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-top-img">
                                <img class="w-100" src="{{$car->image}}" alt="">
                            </div>
                            <div class="card-body">
                                <h4>{{$car->brand_name}}</h4>
                                <h6>{{$car->year}}</h6>
                                @if($car->user)
                                    <h6>{{$car->user->name}}</h6>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection