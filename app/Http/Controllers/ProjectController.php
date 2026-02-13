<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    // Public: Show all projects on homepage
    public function index()
    {
        $projects = Project::latest()->get();
        return view('home', compact('projects'));
    }

    // Admin: List all projects
    public function adminIndex()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    // Admin: Show create form
    public function create()
    {
        return view('admin.projects.create');
    }

    // Admin: Store new project
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'languages' => 'required|string',
            'tools' => 'required|string',
            'link' => 'nullable|url',
            'is_featured' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            // Generate unique filename
            $filename = uniqid() . '_' . time() . '.' . $request->file('image')->extension();
            
            // Store in public/projects directory (not storage)
            $request->file('image')->move(public_path('projects'), $filename);
            
            $validated['image'] = 'projects/' . $filename;
        }

        $validated['is_featured'] = $request->boolean('is_featured');

        Project::create($validated);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully!');
    }

    // Admin: Show edit form
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    // Admin: Update project
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'languages' => 'required|string',
            'tools' => 'required|string',
            'link' => 'nullable|url',
            'is_featured' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image));
            }
            
            // Generate unique filename
            $filename = uniqid() . '_' . time() . '.' . $request->file('image')->extension();
            
            // Store in public/projects directory
            $request->file('image')->move(public_path('projects'), $filename);
            
            $validated['image'] = 'projects/' . $filename;
        }

        $validated['is_featured'] = $request->boolean('is_featured');

        $project->update($validated);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully!');
    }

    // Admin: Delete project
    public function destroy(Project $project)
    {
        // Delete image if exists
        if ($project->image && file_exists(public_path($project->image))) {
            unlink(public_path($project->image));
        }
        
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully!');
    }
}