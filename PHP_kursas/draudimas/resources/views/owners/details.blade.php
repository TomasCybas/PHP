@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        {{$owner->name}} <br>
                        {{$owner->surname}}
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Valst. Nr.</th>
                                <th>Markė</th>
                                <th>Modelis</th>
                                <th>Galioja nuo</th>
                                <th>Galioja iki</th>
                            </tr>
                            </thead>
                            @foreach($owner->cars as $car)
                                <tr>
                                    <td>{{$car->reg_number}}</td>
                                    <td>{{$car->brand}}</td>
                                    <td>{{$car->model}}</td>
                                    <td>{{$car->from_date}}</td>
                                    <td>{{$car->to_date}}</td>
                                </tr>
                            @endforeach
                        </table>

                        <div>
                            <a href="" class="btn btn-success">Pridėti naują automobilį</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
