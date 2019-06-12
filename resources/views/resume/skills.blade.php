<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<div class="container text-center">
    <h3 class="m-3">Skills</h3>
    <a id="postJob"  href="show-create-skill/{{$id}}" class="btn btn1 float-left my-1">Add New Skill</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Skill Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($skills as $skill)
            <tr>
                <td>{{$skill->name}}</td>
                <td>
                    <a class="btn btn1" href="edit-skill/{{$skill->id}}">Edit</a>
                    <a class="btn btn1" href="remove-skill/{{$skill->id}}/{{$skill->id_refrence}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>