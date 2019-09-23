@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <table class="table table-hover super-custom-class">
                            <thead>
                            <tr>
                                <th>Valst. Nr.</th>
                                <th>Markė</th>
                                <th>Modelis</th>
                                <th>Savininkas</th>
                                <th>Galioja nuo</th>
                                <th>Galioja iki</th>

                            </tr>
                            </thead>
                            <tbody>
                        @foreach($cars as $car)
                        <tr class="text-capitalize" onclick="document.location='{{route('owners.details', $car->owner->id)}}'">
                            <td class="text-uppercase">{{$car->reg_number}}</td>
                            <td>{{$car->brand}}</td>
                            <td>{{$car->model}}</td>
                            <td>{{$car->owner->name}} {{$car->owner->surname}}</td>
                            <td>{{$car->from_date}}</td>
                            <td>{{$car->to_date}}</td>
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
