@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<section class="container ">
    <div class="card" style="width: 18rem;">
        <h2 class="card-title">
            {{ $project->title }}
        </h2>
        <img class="card-img-top" src="{{ $project->img_url }}" alt="{{ $project->name }}">
        <div class="card-body">
            <h4 class="card-title">
                Date: {{ $project->date }}
            </h4>
            <p class="card-text">
                <strong> Description: </strong> {{ $project->description }}
            </p>
        </div>
    </div>
    <div class="mt-2">
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
</section>

@endsection