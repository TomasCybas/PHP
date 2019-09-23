@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <form method="post" action="{{route('cars.update', $car->id)}}">
                            @csrf
                            <div class="form-group">
                                <label for="reg_number">Valstybinis Nr.</label>
                                <input type="text" name="reg_number" id="reg_number" class="form-control"
                                       value="{{$car->reg_number}}">
                            </div>
                            <div class="form-group">
                                <label for="brand">Markė</label>
                                <input type="text" name="brand" id="brand" class="form-control"
                                       value="{{$car->brand}}">
                            </div>
                            <div class="form-group">
                                <label for="model">Modelis</label>
                                <input type="text" name="model" id="model" class="form-control"
                                       value="{{$car->model}}">
                            </div>
                            <div class="form-group">
                                <label for="from_date">Galiojimo pradžios data</label>
                                <input type="date" name="from_date" id="from_date" class="form-control"
                                value="{{$car->from_date}}">
                            </div>
                            <div class="form-group">
                                <label for="to_date">Galiojimo pabaigos data</label>
                                <input type="date" name="to_date" id="to_date" class="form-control"
                                       value="{{$car->to_date}}">
                            </div>
                            <button type="submit" class="btn btn-success">Išsaugoti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
