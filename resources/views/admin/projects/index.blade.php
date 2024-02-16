@extends('layouts.admin')

@section ('title', 'Dashboard')

@section('main-content')
<section class="container">
    <div class="row">
        <div class="col12">
            <a href="{{ route('admin.projects.create') }}" class="text-decoration-none me-2">
                <button class="btn btn-lg btn-dark mb-4">
                    Create
                </button>
            </a>
        </div>
        <div class="col6">
            <ul class="d-flex flex-wrap list-unstyled">
                @forelse ($projects as $project)
                <li class="me-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <h2 class="card-title">
                            {{$project->title}}
                        </h2>
                        type = <strong><{{ $project->type->name }}</strong>
                        <img src="{{$project->img_url}}" class="card-img-top" alt="project image">
                        <div class="card-body">
                            <h4 class="card-title">Date: {{$project->date}} </h4>
                            <p class="card-text">Description: {{$project->description}}</p>
                        </div>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('admin.projects.show', $project) }}" class="text-decoration-none me-2">
                            <button class="btn btn-sm btn-primary">
                                View
                            </button>
                        </a>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-decoration-none me-2">
                            <button class="btn btn-sm btn-success">
                                Edit
                            </button>
                        </a>
                        <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-warning" type="submit">
                                Delete
                            </button>
                        </form>
                    </div>
                </li>
                @empty
                <li>
                    projects not found
                </li>
                @endforelse
            </ul>
        </div>
    </div>
</section>

@endsection