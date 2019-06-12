<?php

namespace App\Http\Controllers;

use App\jobsApplied;
use App\Project;
use App\Skills;
use App\UserExperience;
use App\UserProfile;
use App\UserSkills;
use Illuminate\Http\Request;

class ApplicantsSearchController extends Controller
{

    public function getApplicants($jobId){
        $profileId = jobsApplied::Select('id_profile')->where(['id_job' => $jobId])->get();
        $arr = array();
        for ($i = 0; $i < count($profileId); $i++) {
            $getdata = UserProfile::where('id_profile', $profileId[$i]['id_profile'])->get();
            $arr[$i]['data'] = $getdata;
            $sk = $this->getSkillsWeightage($profileId[$i]['id_profile'],$jobId);
            $pro = $this->getProjectsWeightage($profileId[$i]['id_profile']);
            $exp = $this->getExpWeightage($profileId[$i]['id_profile']);
            $arr[$i]['weightage'] = $sk+$pro+$exp;

        }

        for ($i = 0; $i<count($arr) ;$i++){
            for($j = 0; $j<count($arr); $j++){
                if($arr[$j]['weightage'] < $arr[$i]['weightage'])
                {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        return view('jobs/applicants')->with('applicants',$arr);

    }

    public function getProjectsWeightage($id){
        if(Project::where('id_profile',$id)->exists()){
            $pro = Project::where('id_profile',$id)->get();
            return ((count($pro)/30)*100);
        }else{
            return 0;
        }
    }

    public function getExpWeightage($id){
        if(UserExperience::where('id_profile',$id)->exists()){
            $ex = UserExperience::where('id_profile',$id)->get();
            return ((count($ex)/30)*100);
        }else{
            return 0;
        }
    }
    public function getSkillsWeightage($id,$jobId){
        if(Skills::where(['id_refrence'=>$id,'type'=>'profile'])->exists()){
            $skills = Skills::where(['id_refrence'=>$id,'type'=>'profile'])->get();
            $jobskills = Skills::where(['id_refrence'=>$jobId,'type'=>'job'])->get();
            $counter = 0;
            for ($i=0;$i<count($skills);$i++){
                for($j=0;$j<count($jobskills);$j++){
                    if(strtolower($skills[$i]['name']) == strtolower($jobskills[$j]['name'])){
                        $counter++;
                    }
                }

            }

        return (($counter/40)*100);
        }else{
            return 0;
        }
    }

}

