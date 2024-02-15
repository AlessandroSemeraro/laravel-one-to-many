@extends('layouts.admin')


@section('main-content')
<section class="container">
    <div class="row">
        <div class="d-flex justify-content-center col-12">
            <form  action="{{route('admin.projects.store')}}" method="POST">
                @csrf
                <div class="mb-4 d-flex justify-content-between" >
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="img_url" class="form-label">Image url:</label>
                    <input type="text" name="img_url" id="img_url">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="date" class="form-label">Date:</label>
                    <input type="text" name="date" id="date">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="description" class="form-label">Description:</label>
                    <textarea type="text" name="description" id="description" ></textarea>
                </div>
                <div>
        
                    <button type="submit" class="me-3 btn btn-success">Create</button>  
                
                </div>
            </form>
        </div>
    </div>
</section>
@endsection