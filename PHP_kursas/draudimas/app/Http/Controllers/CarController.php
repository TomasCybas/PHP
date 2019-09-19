<?php

namespace App\Http\Controllers;

use App\Car;
use App\Owner;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view("cars.index", [
            "cars" => $cars,
        ]);
    }
}
