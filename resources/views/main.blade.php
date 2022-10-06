@extends('layouts.app')

@section('title-block')
    Главная страница
@endsection

@section('content')
<div class="container">
@foreach($posts as $post)
<!-- <div class="col-md-6"></div> -->
<div class="text-center">
    <div class="row col-md-12 g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">@foreach($post->tags as $tag) {{ $tag->name }} @endforeach</strong>
            <h3 class="mb-0">{{ $post->title }}</h3>
            <div class="mb-1 text-muted">-</div>
            <p class="mb-auto">{{ $post->content }}</p>
            <a href="#" class="stretched-link">Continue reading</a>
            </div>
        </div>
</div>
@endforeach
</div>

@endsection