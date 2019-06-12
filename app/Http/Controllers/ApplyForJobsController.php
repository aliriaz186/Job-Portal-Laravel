<?php

namespace App\Http\Controllers;

use App\Job;
use App\jobsApplied;
use App\Skills;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ApplyForJobsController extends Controller
{
    public function applyForJobs($jobId)
    {
        $apply = new jobsApplied();
        $apply->id_job = $jobId;
        $apply->status = 0;
        $userId = Session::get('id');
        $res = 0;
        if(UserProfile::where('id_user',$userId)->exists()){
           $profileId = UserProfile::where('id_user',$userId)->get();
           if(jobsApplied::where(['id_profile'=>$profileId[0]['id_profile'], 'id_job'=>$jobId])->exists()){
               return redirect('view-jobs/2');
           }
            $apply->id_profile = $profileId[0]['id_profile'];
            $res = $apply->save();
        }else{
            return redirect('view-jobs/3');
        }
        return redirect('view-jobs/1');
    }

    public function getallJobs($status){
        $jobs =Job::all();
        $arr =array();
        for ($i=0;$i<count($jobs);$i++){
            $arr[$i]['job'] = $jobs[$i];
            if(Skills::where(['type'=>'job', 'id_refrence'=> $jobs[$i]['id']])->exists()){

                $arr[$i]['job']['skill'] = Skills::where(['type'=>'job', 'id_refrence'=> $jobs[$i]['id']])->get();
            }
        }
       // save sessions
        if(Auth::check()){
            Session::put('id', Auth::user()->id);
            Session::put('type_account',  Auth::user()->type_account);
            if(Session::get('type_account')==0){
                return view('jobs/viewjobs')->with(['jobs'=>$arr,'result' => $status]);
            }else{
                $arr = array();
                return redirect('jobs');
            }
        }
    }

}
