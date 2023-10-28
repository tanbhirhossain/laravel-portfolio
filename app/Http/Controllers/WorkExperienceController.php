<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkExperienceController extends Controller
{
    public function index(){
        $work_exp = json_decode(Storage::get('data/work_experiences.json'), true);

        return view('backend.work.work_experience', compact('work_exp'));
    }        
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string',
            'designation' => 'required|string',
            'joining_date' => 'required|date',
            'end_date' => 'required|date',
            'location' => 'nullable|string'
        ]);

        $work_exp = json_decode(Storage::get('data/work_experiences.json'), true);

        $newWorkExperience = [
            'company_name' => $request->input('company_name'),
            'designation' => $request->input('designation'),
            'joining_date' => $request->input('joining_date'),
            'end_date' => $request->input('end_date'),
            'location' => $request->input('location'),
        ];

        $work_exp[] = $newWorkExperience;

        Storage::put('data/work_experiences.json', json_encode($work_exp, JSON_PRETTY_PRINT));

        return redirect()->route('works.index')->with('success', 'Work experience added successfully');
    }
  
}
