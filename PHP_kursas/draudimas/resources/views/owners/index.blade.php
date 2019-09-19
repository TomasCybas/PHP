@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Vardas</th>
                                <th>Pavardė</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($owners as $owner)
                                <tr>
                                    <td>{{$owner->name}}</td>
                                    <td>{{$owner->surname}}</td>
                                    <td><a href="{{route("owners.details", $owner->id)}}" class="btn btn-primary">Plačiau</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('owners.new')}}" class="btn btn-success">Pridėti naują savininką</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
