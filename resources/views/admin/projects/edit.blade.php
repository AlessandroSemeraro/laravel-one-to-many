@extends('layouts.admin')


@section('main-content')
<section class="container">
    <div class="row">
        <div class="d-flex justify-content-center col-12">
            <form  action="{{route('admin.projects.update',$project)}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-4 d-flex justify-content-between" >
                    <label for="title" class="form-label">Edit itle:</label>
                    <input type="text" value="{{$project->title}}" name="title" id="title">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="img_url" class="form-label">Edit image url:</label>
                    <input type="text" value="{{$project->img_url}}" name="img_url" id="img_url">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="date" class="form-label">Edit date:</label>
                    <input type="text" value="{{$project->date}}" name="date" id="date">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="description" class="form-label">Edit description:</label>
                    <textarea type="text" value="{{$project->description}}" name="description" id="description" ></textarea>
                </div>
                <div>
                <a href="{{route('admin.projects.edit', $project->id)}}">
                    <button type="submit" class="me-3 btn btn-success">Edit</button>  
                </a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection