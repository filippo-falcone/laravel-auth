@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>{{ $project->name }}</h3>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Slug:</strong> {{ $project->slug }}</p>
                <p class="card-text"><strong>Client Name:</strong>
                    {{ $project->client_name ? $project->client_name : 'Empty' }}</p>
                <p class="card-text"><strong>Created at:</strong> {{ $project->created_at }}</p>
                <p class="card-text"><strong>Updated at:</strong> {{ $project->updated_at }}</p>
                <p class="card-text">{{ $project->summary }}</p>
            </div>
        </div>
    </div>
@endsection
