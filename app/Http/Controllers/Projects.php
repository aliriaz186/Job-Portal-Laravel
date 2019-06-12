<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class Projects extends Controller
{
    public function showProjects($id){
        $exp = Project::where('id_profile',$id)->get();
        return view('resume/projects')->with(['projects'=> $exp, 'id' => $id]);
    }
    public function showCreateProject($id){
        return view('resume/createproject')->with('idProfile',$id);
    }
    public function saveProject(Request $request)
    {
        $project = new Project();
        $project->name = $request->projectName;
        $project->role = $request->roleInProject;
        $project->description = $request->projectDescription;
        $project->id_profile = $request->idProfile;
        $res = $project->save();
        return redirect('view-profile/projects/'.$request->idProfile);
    }

    public function destroy($id,$idProfile){
        $pro = Project::find($id);
        $result = $pro->delete();
        return redirect('view-profile/projects/'.$idProfile);
    }
    public function edit($id){
        $res = Project::all()->find($id);
        return view('resume/editproject',['data'=>$res]);
    }
    public function update(Request $request){
        $project = Project::find($request->id);
        $project->name = $request->projectName;
        $project->role = $request->roleInProject;
        $project->description = $request->projectDescription;
        $project->id_profile = $request->idProfile;
        $res = $project->update();
        return redirect('view-profile/projects/'.$request->idProfile);
    }
}
