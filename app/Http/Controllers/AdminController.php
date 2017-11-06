<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Textile;

class AdminController extends Controller
{
    public function index()
    {

    }

    public function textile_view_list()
    {
        $textiles = Textile::all();

        return view('pages.admin.textile-list',compact('textiles'));
    }

    public function textile_view_add()
    {
        $projects = Project::all();
        //return view('admin-textile-add');
        return view('pages.admin.textile-add')->with(compact('projects'));
    }

    public function textile_add()
    {

        $textile = new Textile;
        $textile->name = request('textile-name');
        $textile->detail = request('textile-detail');
        $textile->project_id = request('project_id');
        $textile->save();
        return redirect('/admin/textile');
    }

    public function textile_view_edit($id)
    {
        $textile = Textile::find($id);
        $projects = Project::all();

        return view('pages.admin.textile-edit',compact('textile'))->with(compact('projects'));
    }

    public function textile_edit($id)
    {
        $textile = Textile::find($id);
        $textile->name = request('textile-name');
        $textile->detail = request('textile-detail');
        $textile->save();
        return redirect('/admin/textile');
    }

    public function textile_delete($id)
    {
        $textile = Textile::find($id);
        $textile->delete();
        return redirect('/admin/textile');
    }
}
