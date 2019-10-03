@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <a href="{{route('courses.create')}}" class="btn btn-success m-2">Sukurti naują kursą</a>

                        <table class="table">
                         <thead>
                         <tr>
                             <th>Kurso pavadinimas</th>
                             <th>Aprašymas</th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach($courses as $course)
                             <tr>
                                 <td>{{$course->name}}</td>
                                 <td>{{$course->description}}</td>
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
