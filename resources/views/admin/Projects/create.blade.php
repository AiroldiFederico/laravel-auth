@extends('layouts.app')


@section( 'content' )

<div class="content">
    <div class="container">

        {{-- CREATE --}}
        <div class="col-12 JobContainer mt-5">

            <div class="cardjob col-12">

                
                <h2 class="display-5 fw-bold">
                    Add Project
                </h2>

                <form action="{{ route('admin.projects.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                
                    {{-- Titolo --}}
                    <div class="mb-3">
                        <label for="comic-title" class="form-label">Title</label>
                        <input type="text" name="title" id="comic-title" class="form-control @error('title') is-invalid @enderror" placeholder="Insert the title">
                    </div>
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                
                    {{-- GitHub --}}
                    <div class="mb-3">
                        <label for="comic-github" class="form-label">GitHub</label>
                        <input type="text" name="github" id="comic-github" class="form-control @error('github') is-invalid @enderror" placeholder="Insert the GitHub link">
                    </div>
                    @error('github')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                
                    {{-- Link --}}
                    <div class="mb-3">
                        <label for="comic-link" class="form-label">Link</label>
                        <input type="text" name="link" id="comic-link" class="form-control @error('link') is-invalid @enderror" placeholder="Insert the project link (optional)">
                    </div>
                    @error('link')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                
                    {{-- Immagine --}}
                    <div class="mb-3">
                        <label for="comic-image" class="form-label">Image</label>
                        <input type="file" name="image" id="comic-image" class="form-control">
                    </div>
                
                    {{-- Linguaggi --}}
                    <div class="mb-3">
                        <label for="comic-languages" class="form-label">Languages</label>
                        <input type="text" name="languages" id="comic-languages" class="form-control @error('languages') is-invalid @enderror" placeholder="Insert the programming languages">
                    </div>
                    @error('languages')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Create Project</button>
                    </div>
                </form>
                


            </div>

        </div>
    </div>
</div>


@endsection