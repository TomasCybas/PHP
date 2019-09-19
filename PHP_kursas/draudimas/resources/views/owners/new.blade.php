@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                       <form method="post" action="{{route('owners.store')}}">
                           @csrf
                           <div class="form-group">
                               <label for="name">Vardas</label>
                               <input type="text" name="name" id="name" class="form-control" placeholder="Įveskite vardą">
                           </div>
                           <div class="form-group">
                               <label for="surname">Pavardė</label>
                               <input type="text" name="surname" id="surname" class="form-control" placeholder="Įveskite pavardę">
                           </div>
                           <button type="submit" class="btn btn-success">Išsaugoti</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
