@extends('layouts.admin')

@section ('title', 'Dashboard')

@section('main-content')

<div class="m-3">
    <h1>
        Weclome on board, {{ Auth::user()->name }}


        {{-- @if(isset($project)) --}}
        <div>
            {{-- <a href="{{ route('admin.projects', $project) }}"> --}}

            <button class="btn btn-primary mt-2">
                
                Progetti
            </button>
            </a>
        </div>
        {{-- @endif --}}
    </h1>
</div>

@endsection