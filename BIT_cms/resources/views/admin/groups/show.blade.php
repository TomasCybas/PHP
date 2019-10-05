@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$group->name}} admin <br>
                    Paskaitos
                    </div>

                    <div class="card-body">
                        <a href="" class="btn btn-success">Pridėti paskaitą</a>
                        <ul class="list-group-flush">
                            @foreach($lectures as $lecture)
                            <li class="list-group-item">
                                <h3>{{$lecture->name}}</h3>
                                <small>{{$lecture->lecture_date}}</small>
                                <p>
                                    {!! $lecture->description !!}
                                </p>
                                <ul class="list-unstyled">
                                    @foreach($lecture->files as $file)
                                    <li>
                                        <a href="{{$file->file}}">{{$file->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>

                            </li>
                            @endforeach

                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
