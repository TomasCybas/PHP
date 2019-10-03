@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <form action="{{route('courses.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Kurso pavadinimas</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Aprašymas</label>
                                <textarea id="description" name="description" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Pridėti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--TODO: add TinyMCE to textarea--}}
