<?php

namespace App\Http\Controllers;

use App\Car;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Response;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        $users = User::all();
        $data = [
            "cars" => $cars,
            "users" => $users
        ];
        return view('cars.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('cars.create', ["users" => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $rules = [
            "brand_name" => "required",
            "year" => "required",
            "image" => "required",
            "user_id" => ["required", "exists:users,id"]
        ];
        $data = $this->validate($request, $rules);


        $car = Car::create($data);

        return Response::redirectTo("/dashboard/cars");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $users = User::all();

        return view('cars.update')->with('car', $car)->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Car $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $rules = [
            "brand_name" => "required",
            "year" => "required",
            "image" => "required",
            "user_id" => ["required", "exists:users,id"]
        ];
        $data = $this->validate($request, $rules);
        $car->update($data);

        return Response::redirectTo("/dashboard/cars");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return Response::redirectTo("/dashboard/cars");

    }
}
