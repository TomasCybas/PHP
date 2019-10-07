@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$group->name}} admin <br>
                    Paskaitos
                    </div>

                    <div class="card-body clearfix">
                        <a href="" class="btn btn-success mb-2">Pridėti paskaitą</a>
                        <ul class="list-group-flush ">
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
                                <div class="float-left">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#fileModal">
                                        Pridėti failą
                                    </button>                                </div>
                                <div class="float-right">
                                    <a href="" class="btn btn-sm btn-success">Redaguoti paskaitą</a>
                                    <a href="" class="btn btn-sm btn-danger">Ištrinti paskaitą</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="fileModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Failų įkėlimas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="custom-file">
                            <label class="btn btn-success btn-sm" for="customFile">Pasirinkite failą</label>
                            <input type="file" class="d-none" id="customFile" multiple>

                            <p id="file_names">

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-sm btn-success">Įkelti</button>
                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Atšaukti</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
{{--TODO: show selected file names--}}
@endsection
