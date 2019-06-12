<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Route::get('/home', function () {
//    return view('index');
//});
Auth::routes();

Route::get('jobs', 'JobsController@index')->middleware('authentication');
Route::get('show-post-job/{id}', 'JobsController@showPostJob')->middleware('authentication');
Route::get('save-job', 'JobsController@store')->middleware('authentication');
Route::get('remove-job/{id}', 'JobsController@destroy')->middleware('authentication');
Route::get('edit-job/{id}', 'JobsController@edit')->middleware('authentication');
Route::get('job-details/{id}', 'JobsController@showDetails')->middleware('authentication');
Route::get('update-job', 'JobsController@update')->middleware('authentication');
Route::get('view-jobs/{status}', 'ApplyForJobsController@getallJobs')->middleware('authentication');
Route::get('show-create-resume', 'UserProfileController@showCreateResume')->middleware('authentication');
Route::get('save-resume', 'UserProfileController@store')->middleware('authentication');
Route::get('view-profile/projects/{id}', 'Projects@showProjects')->middleware('authentication');
Route::get('view-profile/experience/{id}', 'Experience@showExperience')->middleware('authentication');
Route::get('view-profile/skills/{id}', 'SkillsController@showSkills')->middleware('authentication');
Route::get('view-profile/educations/{id}', 'EducationController@showEducations')->middleware('authentication');
Route::get('view-profile/{id}', 'UserProfileController@viewUserProfile')->middleware('authentication');
Route::get('view-profile/projects/show-create-project/{id}', 'Projects@showCreateProject')->middleware('authentication');
Route::get('save-project', 'Projects@saveProject')->middleware('authentication');
Route::get('view-profile/projects/remove-project/{id}/{idProfile}', 'Projects@destroy')->middleware('authentication');
Route::get('view-profile/projects/edit-project/{id}', 'Projects@edit')->middleware('authentication');
Route::get('update-project', 'Projects@update')->middleware('authentication');
Route::get('view-profile/experience/show-create-exp/{id}', 'Experience@showCreateExp')->middleware('authentication');
Route::get('save-exp', 'Experience@saveExp')->middleware('authentication');
Route::get('view-profile/experience/remove-exp/{id}/{idProfile}', 'Experience@destroy')->middleware('authentication');
Route::get('view-profile/experience/edit-exp/{id}', 'Experience@edit')->middleware('authentication');
Route::get('update-exp', 'Experience@update')->middleware('authentication');
Route::get('view-profile/educations/show-create-edu/{id}', 'EducationController@showCreateEdu')->middleware('authentication');
Route::get('save-edu', 'EducationController@saveExp')->middleware('authentication');
Route::get('view-profile/educations/remove-edu/{id}/{idProfile}', 'EducationController@destroy')->middleware('authentication');
Route::get('view-profile/educations/edit-edu/{id}', 'EducationController@edit')->middleware('authentication');
Route::get('update-edu', 'EducationController@update')->middleware('authentication');
Route::get('view-profile/skills/show-create-skill/{id}', 'SkillsController@showCreateSkill')->middleware('authentication');
Route::get('save-skill', 'SkillsController@saveSkill')->middleware('authentication');
Route::get('view-profile/skills/remove-skill/{id}/{idProfile}', 'SkillsController@destroy')->middleware('authentication');
Route::get('view-profile/skills/edit-skill/{id}', 'SkillsController@edit')->middleware('authentication');
Route::get('update-skill', 'SkillsController@update')->middleware('authentication');
Route::get('view-jobs/apply-for-job/{id}', 'ApplyForJobsController@applyForJobs')->middleware('authentication');
Route::get('view-applicants/{id}', 'ApplicantsSearchController@getApplicants')->middleware('authentication');
Route::get('view-profile/preview-resume/{id}','UserProfileController@previewCv');
Route::get('view-applicants/view-resume/{id}','UserProfileController@previewCv');
Route::get('view-profile/download-resume/{id}','UserProfileController@downloadCV');
Route::get('view-applicants/download-resume/{id}','UserProfileController@downloadCV');
