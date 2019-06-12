<?php

namespace App\Http\Controllers;

use App\Project;
use App\Skills;
use App\UserEducation;
use App\UserExperience;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class UserProfileController extends Controller
{


    public function showCreateResume(){
        if(UserProfile::where('id_user',Session::get('id'))->exists()){
            return redirect('view-profile/0');
        }else{
            return view('resume/userresume');
        }
    }
    public function viewUserProfile($id){
        if(UserProfile::where('id_user',Session::get('id'))->exists()){
            $res = UserProfile::where('id_user',Session::get('id'))->get();
            return view('resume/viewprofile',['data'=>$res[0]]);
        }else{
            return redirect('show-create-resume');
        }

    }

    public function store(Request $request)
    {
        $userProfile = new UserProfile();
        $userProfile->first_name = $request->firstName;
        $userProfile->last_name = $request->lastName;
        $userProfile->address = $request->address;
        $userProfile->gender = $request->gender;
        $userProfile->phone = $request->contact;
        $userProfile->email = $request->email;
        $userProfile->date_of_birth = $request->dateOfBirth;
        $userProfile->work_experience = $request->experience;
        $userProfile->id_user = Session::get('id');
        $profileResponse = $userProfile->save();
        $res = UserProfile::where('id_user',Session::get('id'))->get();
        return redirect('view-profile/0')->with(['data'=>$res[0]]);
    }

    public function previewCv($id){
        $basic = UserProfile::where('id_profile',$id)->get();
        if(Project::where('id_profile',$id)->exists()){
            $pro = Project::where('id_profile',$id)->latest()->first();

        }
        if(UserExperience::where('id_profile',$id)->exists()){
            $exp = UserExperience::where('id_profile',$id)->latest()->first();
        }
        if(UserEducation::where('id_profile',$id)->exists()){
            $edu = UserEducation::where('id_profile',$id)->latest()->first();
        }
        if(Skills::where(['id_refrence'=>$id, 'type'=>'profile'])->exists()){
            $skl = Skills::where(['id_refrence'=>$id, 'type'=>'profile'])->get();
        }
        return view('resume/previewcv')->with(['basic'=>$basic[0],'edu'=>$edu,'exp'=>$exp,'skills'=>$skl,'pro'=>$pro]);
    }

    public function downloadCV($id){
        $basic = UserProfile::where('id_profile',$id)->get();
        if(Project::where('id_profile',$id)->exists()){
            $pro = Project::where('id_profile',$id)->latest()->first();

        }
        if(UserExperience::where('id_profile',$id)->exists()){
            $exp = UserExperience::where('id_profile',$id)->latest()->first();
        }
        if(UserEducation::where('id_profile',$id)->exists()){
            $edu = UserEducation::where('id_profile',$id)->latest()->first();
        }
        if(Skills::where(['id_refrence'=>$id, 'type'=>'profile'])->exists()){
            $skl = Skills::where(['id_refrence'=>$id, 'type'=>'profile'])->get();
        }
        $pdf = PDF::loadView('resume/previewcv',['basic'=>$basic[0],'edu'=>$edu,'exp'=>$exp,'skills'=>$skl,'pro'=>$pro]);
        return $pdf->download('resume.pdf');
    }
}
