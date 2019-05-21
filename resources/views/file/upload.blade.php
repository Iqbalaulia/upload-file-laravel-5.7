@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <h5 class="card-header">File Upload</h5>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ action('FileController@store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <input type="file" name="file[]" multiple>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                        <a href="{{ action('FileController@index') }}" class="btn btn-success">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection