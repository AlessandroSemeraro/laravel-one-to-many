<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects= Project::all(); //dammi tutti i projects
       return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        return view('admin.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newProjectData=$request; //recupero i dati dal form
        $newProject=new Project();

        $newProject->title=$newProjectData['title'];
        $newProject->img_url=$newProjectData['img_url'];
        $newProject->date=$newProjectData['date'];
        $newProject->description=$newProjectData['description'];
        $newProject->save();

        return redirect ()->route('admin.projects.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project=Project::findOrFail($id);
        return view('admin.projects.show',compact('project'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project=Project::findOrFail($id);
        return view ('admin.projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        
        $data=$request->all();
        $project->title=$data['title'];
        $project->img_url=$data['img_url'];
        $project->date=$data['date'];
        $project->description=$data['description'];
        $project->save();

        return redirect()->route('admin.projects.show',$project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
