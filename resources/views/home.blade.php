@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{--<div><img src="/images/l01.png" alt="Laravel image"></div>--}}
            <div class="panel-body">
                <form method="post" action="/upload" enctype="multipart/form-data">
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">
                            {{ $error }}
                        </p>
                    @endforeach
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="image">Choose an image</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-default">Upload</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
