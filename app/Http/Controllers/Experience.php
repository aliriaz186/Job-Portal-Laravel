<?php

namespace App\Http\Controllers;

use App\UserExperience;
use Illuminate\Http\Request;

class Experience extends Controller
{
    public function showExperience($id){
       $exp = UserExperience::where('id_profile',$id)->get();
       return view('resume/experiences')->with(['experiences' => $exp, 'id' => $id]);
    }

    public function showCreateExp($id){
        return view('resume/createexp')->with('idProfile',$id);
    }
    public function saveExp(Request $request)
    {
        $experience = new UserExperience();
        $experience->company = $request->company;
        $experience->position = $request->position;
        $experience->start_date = $request->startDate;
        $experience->end_date = $request->endDate;
        $experience->description = $request->experienceDescription;
        $experience->id_profile = $request->profileId;
        $result = $experience->save();
        return redirect('view-profile/experience/'.$request->profileId);
    }

    public function destroy($id,$idProfile){
        $pro = UserExperience::find($id);
        $result = $pro->delete();
        return redirect('view-profile/experience/'.$idProfile);
    }
    public function edit($id){
        $res = UserExperience::all()->find($id);
        return view('resume/editexp',['data'=>$res]);
    }
    public function update(Request $request){
        $experience = UserExperience::find($request->id);
        $experience->company = $request->company;
        $experience->position = $request->position;
        $experience->start_date = $request->startDate;
        $experience->end_date = $request->endDate;
        $experience->description = $request->experienceDescription;
        $experience->id_profile = $request->idProfile;
        $res = $experience->update();
        return redirect('view-profile/experience/'.$request->idProfile);
    }
}
