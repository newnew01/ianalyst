<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function index()
    {
        return redirect('/admin/project/list');
    }

    public function project_list()
    {
        $projects = Project::all();
        return view('pages.admin.project-list')->with(compact('projects'));
    }
}
