@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                     <form action="{{route('shops.store')}}" method="post">
                         @csrf
                         <div class="form-group">
                             <label for="name">Pavadinimas</label>
                             <input type="text" name="name" id="name" class="form-control" placeholder="">
                         </div>
                         <div class="form-group">
                             <label for="address">Adresas</label>
                             <input type="text" name="address" id="address" class="form-control" placeholder="">
                         </div>
                         <button type="submit" class="btn btn-success">Pridėti</button>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
