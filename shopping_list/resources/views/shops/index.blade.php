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
                             <th>Parduotuvė</th>
                             <th>Adresas</th>
                             <th></th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach($shops as $shop)
                             <tr>
                                 <td>{{$shop->name}}</td>
                                 <td>{{$shop->address}}</td>
                                 <td>
                                     <a href="{{route('shoppingItems.shop', $shop->id)}}" class="btn btn-sm btn-success">Pirkinių sąrašas</a>
                                     <a href="{{route('shops.delete', $shop)}}" class="btn btn-sm btn-danger">Ištrinti</a>
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
