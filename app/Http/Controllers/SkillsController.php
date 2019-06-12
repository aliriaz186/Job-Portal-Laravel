<?php

namespace App\Http\Controllers;

use App\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function showSkills($id){
        $exp = \App\Skills::where(['id_refrence'=>$id, 'type'=>'profile'])->get();
        return view('resume/skills')->with(['skills'=>$exp, 'id' => $id]);
    }

    public function showCreateSkill($id){
        return view('resume/createskill')->with('idProfile',$id);
    }
    public function saveSkill(Request $request)
    {
        $skl = new Skills();
        $skl->id_refrence = $request->idProfile;
        $skl->name = $request->name;
        $skl->type = 'profile';
        $result = $skl->save();
        return redirect('view-profile/skills/'.$request->idProfile);
    }

    public function destroy($id,$idProfile){
        $pro = Skills::find($id);
        $result = $pro->delete();
        return redirect('view-profile/skills/'.$idProfile);
    }
    public function edit($id){
        $res = Skills::all()->find($id);
        return view('resume/editskill',['data'=>$res]);
    }
    public function update(Request $request){
        $skl = Skills::find($request->id);
        $skl->id_refrence = $request->idProfile;
        $skl->name = $request->name;
        $skl->type = 'profile';
        $res = $skl->update();
        return redirect('view-profile/skills/'.$request->idProfile);
    }
}
