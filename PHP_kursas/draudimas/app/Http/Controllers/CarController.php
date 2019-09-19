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

    public function addCar($owner_id){

        return view('cars.add', [
            'owner_id' => $owner_id,
        ]);
    }

    public function storeCar($owner_id, Request $request){
        $car = new Car();
        $car->reg_number = $request->reg_number;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->owner_id = $owner_id;
        $car->from_date = $request->from_date;
        $car->to_date = $request->to_date;
        $car->save();

        return redirect()->route('owners.details', $owner_id);

    }
    public function editCar($id){
        $car = Car::find($id);
        return view('cars.edit', [
            'car' => $car,
        ]);
    }

    public function updateCar($id, Request $request){
        $car = Car::find($id);
        $car->reg_number = $request->reg_number;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->owner_id = $request->owner_id;
        $car->from_date = $request->from_date;
        $car->to_date = $request->to_date;
        $car->save();

        return redirect()->route('owners.details', $request->owner_id);
    }

    public function deleteCar($id, $owner_id){
        Car::destroy($id);
        return redirect()->route('owners.details', $owner_id );
    }
}
