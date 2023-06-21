
@extends('layouts.app')
@section('content')


<div class="content">

    <div class="container mt-5">
        <div class="row">
            @foreach ($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ $project->languages }}</p>
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    


</div>


@endsection