@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">Projects</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Client Name</th>
                    <th class="d-none d-lg-table-cell" scope="col">Created at</th>
                    <th class="d-none d-lg-table-cell" scope="col">Updated at</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->client_name }}</td>
                        <td class="d-none d-lg-table-cell">{{ $project->created_at }}</td>
                        <td class="d-none d-lg-table-cell">{{ $project->updated_at }}</td>
                        <td>
                            <a class="btn btn-outline-primary btn-sm"
                                href="{{ route('admin.projects.show', $project->id) }}" role="button">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
