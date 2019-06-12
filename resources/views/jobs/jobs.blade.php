<html>
<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<div class="container text-center">
    <h3 class="m-3">Jobs</h3>
    <a id="postJob"  href="show-post-job/{{0}}" class="btn btn1 float-left my-1">Post A Job</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>date created</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jobs as $job)
        <tr>
            <td>{{$job->title}}</td>
            <td>{{$job->date_created}}</td>
            <td>
                <a class="btn btn1" href="view-applicants/{{$job->id}}">View Applicants List</a>
                <a class="btn btn1" href="edit-job/{{$job->id}}">Edit</a>
                <a class="btn btn1" href="remove-job/{{$job->id}}">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</html>