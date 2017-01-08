@extends('shared.master')
@section('title', 'Blog')
@section('content')

    <div class="container col-md-8 col-md-offset-2">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($posts->isEmpty())
            <p> There is no post.</p>
        @else
                <div class="page-header">
                    <h1>Recipe 107 and 108</h1>
                </div>
            @foreach ($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">{!! $post->title !!}</div>
                    <div class="panel-body">
                        {!! mb_substr($post->content,0,500) !!}
                    </div>
                </div>
            @endforeach
                {!! $posts->render() !!}
        @endif
    </div>

@endsection