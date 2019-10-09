@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nauja grupė</div>
                    <div class="card-body">
                        <form action="{{route('lectures.update', $lecture)}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Paskaitos pavadinimas</label>
                                <input type="text" name="name" id="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       value="{{old('name')=="" ? $lecture->name : old('name') }}" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="group_id">Grupė</label>
                                <select type="text" name="group_id" id="group_id"
                                        class="form-control custom-select @error('group_id') is-invalid @enderror"
                                        required>
                                    @foreach($groups as $group)
                                        <option value="{{$group->id}}"
                                                class="{{$lecture->group_id == $group->id ? 'selected' : ''}}">
                                            {{$group->name}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('group_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="lecture_date">Paskaitos data</label>
                                <input type="date" name="lecture_date" id="lecture_date"
                                       class="form-control @error('lecture_date') is-invalid @enderror"
                                       value="{{old('lecture_date') == '' ? $lecture->lecture_date : old('lecture_date')}}"
                                       required>
                                @error('lecture_date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <script>tinymce.init({selector: '#description'});</script>
                                <label for="description">Aprašymas</label>
                                <textarea id="description" name="description"
                                          class="form-control @error('description') is-invalid @enderror" rows="15">
                                   {{old('description') == '' ? $lecture->description : old('description')}}

                               </textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        @foreach($lecture->files as $file)
                                            <tr>
                                                <td>{{$file->name}}</td>
                                                <td>
                                                    <a href="{{route('files.delete', $file)}}"
                                                       class="btn btn-sm btn-danger">Ištrinti</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="files" class="btn btn-sm btn-success file-input">Pridėti
                                        failus</label>
                                    <input type="file" name="files[]" id="files" multiple
                                           class="form-control d-none">
                                    @error('files')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                                <button type="submit" class="btn btn-success">Atnaujinti paskaitą</button>
                                <a href="{{url()->previous()}}" class="btn btn-danger">Atgal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


