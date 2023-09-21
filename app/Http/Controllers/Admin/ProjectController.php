<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\http\controllers\Controller;

//models
use App\Models\Project;

//requests
use App\http\Requests\Project\StoreProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
       $formdata = $request->validated();

       $project = Project::create([
            'name' => $formdata['name'],
            'slug' => str()->slug($formdata['name']),
            'description' => $formdata['description'],
            'start_date' => $formdata['start_date'],
            'end_date' => $formdata['end_date'],
            'project_status' => $formdata['project_status'],
            'languages' => $formdata['languages'],
            'project_link' => $formdata['project_link']
       ]);

       return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
