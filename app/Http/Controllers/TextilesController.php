<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Textile;

class TextilesController extends Controller
{
    public function index()
    {
        $textiles = Textile::all();
        return view('textile-list',compact('textiles'));
    }

    public function show($id)
    {
        $textile = Textile::find($id);
        return view('textile',compact('textile'));
    }

    public function show2($project_name,$id){
        $project_name = preg_replace('/-/', ' ', $project_name);

        $p = Project::where('project_name','like',$project_name);

        if($p->count() > 0){
            $project = $p->first();
            $textile = Textile::where('id','=',$id)->where('project_id','=',$project->id);
            if($textile->count() > 0){
                $textile = $textile->first();
                return view('textile',compact('textile'));
            }
        }

        return redirect('/');
    }
}
