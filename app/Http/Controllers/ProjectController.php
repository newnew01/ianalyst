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

    public function project_add()
    {
        $project = new Project();
        $project->project_name = request('project-name');
        $project->save();
        return redirect('/admin/project');
    }

    public function project_delete($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/admin/project');
    }

    public function project_edit($id)
    {
        $project = Project::find($id);
        if($project != null){
            $project->project_name = request('project-name');
            $project->save();
            return redirect('/admin/project/list');
        }
    }

    public function getProjectInfo($id){
        $project = Project::find($id);
        if($project != null)
            return $project;
        else
            return 'null';
    }
}
