<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    public function index(){
        return view("frontend.home");
    }

    public function works(){
        
        $works = json_decode(Storage::get('data/work_experiences.json'), true);


        return view("frontend.work", compact("works"));
    }

    public function projects(){
        $projects = Json_decode(Storage::get('/data/projects.json'), true);

        return view('frontend.project', compact('projects'));
    }

    public function projectShow($id) {
     
        $projects = json_decode(Storage::get('/data/projects.json'), true);
    
        $project = collect($projects)->where('id', $id)->first();
    
        return view('frontend.project_details', compact('project'));
    }
    
}
