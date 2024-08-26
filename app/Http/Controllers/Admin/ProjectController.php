<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    
    public function store(ProjectRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            
            // Create and resize the image
            $resizedImage = Image::read($image)->cover(640, 640);
            $destinationPath = 'images/projects/';
            
            // Save the image
            Storage::disk('public')->put($destinationPath . $imageName, $resizedImage->encode());
            
            // Add the image path to the data array
            $data['image'] = $destinationPath . $imageName;
        }

        Project::create($data);
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(ProjectRequest $request, Project $project)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete old image
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }

            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            
            // Create and resize the image
            $resizedImage = Image::read($image)->cover(640, 640);
            $destinationPath = 'images/projects/';
            
            // Save the image
            Storage::disk('public')->put($destinationPath . $imageName, $resizedImage->encode());
            
            // Add the image path to the data array
            $data['image'] = $destinationPath . $imageName;
        }

        $project->update($data);
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        // Delete the image file if it exists
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
