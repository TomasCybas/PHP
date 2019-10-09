@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$group->name}} admin <br>
                    Paskaitos
                    </div>

                    <div class="card-body ">
                        <ul class="list-group-flush ">
                            @foreach($lectures as $lecture)
                            <li class="list-group-item clearfix">
                                <h3>{{$lecture->name}}</h3>
                                <small>{{$lecture->lecture_date}}</small>
                                <p>
                                    {!! $lecture->description !!}
                                </p>
                                @if(count($lecture->files))
                                <ul class="list-unstyled">

                                        <h4>Paskaitos failai</h4>
                                        @foreach($lecture->files as $file)
                                            <li class="m-2">
                                                <a href="">{{$file->name}}</a>
                                            </li>
                                        @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

{{--TODO: show files in a table for better readability(maybe), figure out file download!!!!!--}}

@endsection

@section('scripts')
{{--TODO: fix back button--}}
@endsection
