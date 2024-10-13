<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('Projects.index', ['title' => 'MyProfile-Zamzam-Projects', 'projects' => $projects], compact('projects'));
    }

    public function users()
    {
        $projects = Project::latest()->paginate(10);
        return view('Projects.projects', ['title' => 'MyProfile-Zamzam-Projects', 'projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Projects.create', ['title' => 'MyProfile-Zamzam-Projects-Create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'url_project' => 'nullable|min:3',
            'date' => 'required|date',
            'title' => 'required|min:5',
            'description' => 'required|min:10',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/projects', $image->hashName());

        Project::create([
            'image' => $image->hashName(),
            'url_project' => $request->url_project ?? '#',
            'date' => $request->date,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('Projects.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return view('Projects.show', ['title' => 'MyProfile-Zamzam-Project'], compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('Projects.edit', ['title' => 'MyProfile-Zamzam-Projects-Edit'], compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
            'url_project' => 'nullable|min:0',
            'date' => 'required|date',
            'title' => 'required|min:5',
            'description' => 'required|min:10',
        ]);

        $project = Project::findOrFail($id);

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $image->storeAs('public/projects', $image->hashName());
            
            Storage::delete('public/projects/'.$project->image);

            $project->update([
                'image' => $image->hashName(),
                'url_project' => $request->url_project ?? '#',
                'date' => $request->date,
                'title' => $request->title,
                'description' => $request->description,
            ]);
        } else {
            $project->update([
                'url_project' => $request->url_project ?? '#',
                'date' => $request->date,
                'title' => $request->title,
                'description' => $request->description,
            ]);
        }
        return redirect()->route('Projects.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        Storage::delete('public/projects/'.$project->image);
        $project->delete();
        return redirect()->route('Projects.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
