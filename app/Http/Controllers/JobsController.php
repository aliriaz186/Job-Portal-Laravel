<?php
namespace App\Http\Controllers;
use App\Job;
use App\Skills;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = \App\Job::where('id_user',Session::get('id'))->get();
        return view('jobs/jobs')->with('jobs',$res);
    }

    public function create()
    {
        //
    }

    public function showPostJob(){
        return view('jobs/postjob');
    }
    public function store(Request $request)
    {
        $skills = $request->skills;
        $job = new Job();
        $job->company_name = $request->company_name;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->status = $request->status;
        $job->date_created = new DateTime();
        $job->experience = $request->experience;
        $job->min_salary = $request->minSalary;
        $job->max_salary = $request->maxSalary;
        $job->total_positions = $request->totalPositions;
        $job->job_location = $request->jobLocation;
        $job->gender = $request->gender;
        $job->industry = $request->domain;
        $job->experience = $request->experience;
        $job->min_salary = $request->minSalary;
        $job->max_salary = $request->maxSalary;
        $job->total_positions = $request->totalPositions;
        $job->job_location = $request->jobLocation;
        $job->gender = $request->gender;
        $job->industry = $request->industry;
        $job->id_user = Session::get('id');
        $result = $job->save();
        $arr = explode(",",$skills);
        for ($i = 0; $i < count($arr); $i++) {
                $jobSkill = new Skills();
                $jobSkill->name = $arr[$i];
                $jobSkill->type = 'job';
                $jobSkill->id_refrence = $job->id;
                $jobSkill->save();
        }
        return redirect('jobs');
    }
    public function edit($id)
    {
        $res = Job::all()->find($id);
        return view('jobs/editjob',['data'=>$res]);
    }

    public function showDetails($id)
    {
        $res = Job::all()->find($id);
        return view('showdetails',['data'=>$res]);
    }

    public function update(Request $request)
    {
        $job = Job::find($request->id);
        $job->company_name = $request->company_name;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->status = $request->status;
        $job->date_created = new DateTime();
        $job->experience = $request->experience;
        $job->min_salary = $request->minSalary;
        $job->max_salary = $request->maxSalary;
        $job->total_positions = $request->totalPositions;
        $job->job_location = $request->jobLocation;
        $job->gender = $request->gender;
        $job->industry = $request->domain;
        $job->experience = $request->experience;
        $job->min_salary = $request->minSalary;
        $job->max_salary = $request->maxSalary;
        $job->total_positions = $request->totalPositions;
        $job->job_location = $request->jobLocation;
        $job->gender = $request->gender;
        $job->industry = $request->industry;
        $result = $job->update();
        return redirect('jobs');
    }
    public function destroy($id)
    {
        if(Skills::where('id_refrence',$id)->exists()){
            $skills=Skills::where('id_refrence', $id);
            $skills->delete();
        }
        $job = Job::find($id);
        $result = $job->delete();
        return redirect('jobs');

    }
}
