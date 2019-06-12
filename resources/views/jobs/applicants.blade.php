<html>
<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<div class="container text-center">
    <h3 class="m-3">Applicants List</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($applicants as $applicant)
            <tr>
                <td>{{$applicant['data'][0]->first_name}}</td>
                <td>{{$applicant['data'][0]->email}}</td>
                <td>{{$applicant['data'][0]->phone}}</td>
                <td>
                    <a class="btn btn1" href="view-resume/{{$applicant['data'][0]->id_profile}}">View Resume</a>
                    <a class="btn btn1" href="download-resume/{{$applicant['data'][0]->id_profile}}">Download Resume</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</html>