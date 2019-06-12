<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<div class="container text-center">
    <h3 class="m-3">Education</h3>
    <a href="show-create-edu/{{$id}}" class="btn btn1 float-left my-1">Add New Education</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Degree Name</th>
            <th>Degree Type</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($educations as $education)
            <tr>
                <td>{{$education->degree_name}}</td>
                <td>{{$education->degree_type}}</td>
                <td>
                    <a class="btn btn1" href="edit-edu/{{$education->id}}">Edit</a>
                    <a class="btn btn1" href="remove-edu/{{$education->id}}/{{$education->id_profile}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>