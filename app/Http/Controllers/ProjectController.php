<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(){
        $projects = json_decode(Storage::get("data/projects.json"), true);
        return view("backend.project.index", compact("projects"));
    }

    public function store(Request $request){
        // $request->validate([
        //     'category' => 'required|string',
        //     'client' => 'required|string',
        //     'project_date' => 'nullable|date',
        //     'project_url' => 'nullable|text',
        //     'project_desc' => 'nullable|text'
        // ]);

        $project = json_decode(Storage::get('data/projects.json'), true);

        $new_project = [
            'id' => rand(1, 1000),
            'category' => $request->input('category'),
            'client' => $request->input('client'),
            'project_date' => $request->input('project_date'),
            'project_url' => $request->input('project_url'),
            'project_desc' => $request->input('project_desc')
        ];

        $project[] = $new_project;

        Storage::put('data/projects.json', json_encode($project, JSON_PRETTY_PRINT));

        return redirect()->route('projects.index')->with('success', 'Work experience added successfully');
    }

    
}
