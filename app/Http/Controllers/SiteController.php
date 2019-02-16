<?php

namespace App\Http\Controllers;

use App\Car;
use App\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $cars = Car::all();
        $data = compact('cars');
        return view('site.home', $data);
    }

    public function carsByUser(User $user)
    {

        $cars = $user->cars;
        $data = compact('cars');
        return view('site.home', $data);
    }


    public function users()
    {
        $users = User::all();
        $data = compact('users');
        return view('site.users', $data);
    }
}
