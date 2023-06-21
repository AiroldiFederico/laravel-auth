

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text">GitHub: <a href="{{ $project->github }}">{{ $project->github }}</a></p>
            @if($project->link)
                <p class="card-text">Link: <a href="{{ $project->link }}">{{ $project->link }}</a></p>
            @endif
            <p class="card-text">Languages: {{ $project->languages }}</p>
        </div>
    </div>
</div>
@endsection
