@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <div>
                            <a href="{{route('shoppingItems.create')}}" class="btn btn-success mb-2">Pridėti prekę</a>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Prekė</th>
                                <th>Kiekis</th>
                                <th>Parduotuvė</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>
                                        <a href="{{route('items.buy', $item->id)}}" class="btn btn-sm btn-success">Nupirkta</a>
                                    </td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->amount}}</td>
                                    <td>{{$item->shop->name}} {{$item->shop->address}}</td>
                                    <td>
                                        <a href="{{route('items.delete', $item)}}" class="btn btn-sm btn-danger">Ištrinti</a>
                                    </td>
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
