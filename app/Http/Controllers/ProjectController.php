<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            $path = $request->file('image')->store('projects', 'public');
            $validated['image'] = $path;
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
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $path = $request->file('image')->store('projects', 'public');
            $validated['image'] = $path;
        }

        $validated['is_featured'] = $request->boolean('is_featured');

        $project->update($validated);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully!');
    }

    // Admin: Delete project
    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully!');
    }
}