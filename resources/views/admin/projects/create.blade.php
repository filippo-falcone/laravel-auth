@extends('layouts.admin')

@section('content')
    <div>
        <a class="link-dark" href="{{ route('admin.projects.index') }}">
            <i class="fa-solid fa-arrow-left fa-sm"></i>
        </a>
    </div>
    <h2 class="fs-4 text-secondary my-4">Create Project</h2>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingName" name="name" placeholder="Project name">
            <label for="floatingName">Project name</label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fa-regular fa-building"></i>
            </span>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingClientName" name="client_name"
                    placeholder="Client name">
                <label for="floatingClientName">Client name</label>
            </div>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="summary" rows="9" placeholder="Leave a summary here" id="floatingSummary"></textarea>
            <label for="floatingSummary">Summary</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
