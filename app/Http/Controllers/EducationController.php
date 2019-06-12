<?php

namespace App\Http\Controllers;

use App\UserEducation;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function showEducations($id){
        $exp = UserEducation::where('id_profile',$id)->get();
        return view('resume/education')->with(['educations'=> $exp, 'id' => $id]);
    }

    public function showCreateEdu($id){
        return view('resume/createedu')->with('idProfile',$id);
    }
    public function saveExp(Request $request)
    {
        $education = new UserEducation();
        $education->id_profile = $request->profileId;
        $education->degree_name = $request->degree;
        $education->degree_type = $request->degreeType;
        $education->obtained_marks = $request->obtainedMarks;
        $education->total_marks = $request->totalMarks;
        $education->to = $request->to;
        $education->from = $request->from;
        $result = $education->save();
        return redirect('view-profile/educations/'.$request->profileId);
    }

    public function destroy($id,$idProfile){
        $pro = UserEducation::find($id);
        $result = $pro->delete();
        return redirect('view-profile/educations/'.$idProfile);
    }
    public function edit($id){
        $res = UserEducation::all()->find($id);
        return view('resume/editedu',['data'=>$res]);
    }
    public function update(Request $request){
        $education = UserEducation::find($request->id);
        $education->id_profile = $request->idProfile;
        $education->degree_name = $request->degree;
        $education->degree_type = $request->degreeType;
        $education->obtained_marks = $request->obtainedMarks;
        $education->total_marks = $request->totalMarks;
        $education->to = $request->to;
        $education->from = $request->from;
        $res = $education->update();
        return redirect('view-profile/educations/'.$request->idProfile);
    }
}
