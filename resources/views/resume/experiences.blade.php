<html>
<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<div class="container text-center">
    <h3 class="m-3">Experiences</h3>
    <a id="postJob"  href="show-create-exp/{{$id}}" class="btn btn1 float-left my-1">Add New Experience</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Company</th>
            <th>Position</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($experiences as $experience)
            <tr>
                <td>{{$experience->company}}</td>
                <td>{{$experience->position}}</td>
                <td>
                    <a class="btn btn1" href="edit-exp/{{$experience->id}}">Edit</a>
                    <a class="btn btn1" href="remove-exp/{{$experience->id}}/{{$experience->id_profile}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</html>