@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <form action="{{route('shoppingItems.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Prekė</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="amount">Kiekis</label>
                                <input type="number" name="amount" id="amount" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="shop_id">Parduotuvė</label>
                                <select type="number" name="shop_id" id="shop_id" class="form-control">
                                    @foreach($shops as $shop)
                                        <option value="{{$shop->id}}">{{$shop->name}} {{$shop->address}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Pridėti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
