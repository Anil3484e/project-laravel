<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;
class FilesController extends Controller
{
    public function index()
    {
    	$project=new \App\Project;
    	$files=$project::all();
    	return view("projects",compact('files'));
    } 
    public function create()
    {
    	return view("createprojects");
    }
    public function store()
    {
    	$project=new \App\Project;
    	$project->customer_name=request('customer_name');
    	$project->username=request('username');
        $project->password=request('password');
    	$project->save();
    	return redirect("/projects");
    }
    public function edit(Project $project)
    {
    	return view('edit',compact('project'));
    }
    public function update(Project $project)
    {
    	$project->customer_name=request('customer_name');
    	$project->username=request('username');
    	$project->update();
    	return redirect('/projects');
    }
    public function show(Project $project)
    {
    	return view('display',compact('project'));
    }
    
}
