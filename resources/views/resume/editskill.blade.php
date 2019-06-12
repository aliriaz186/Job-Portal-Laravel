<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<h2 align="center">Edit Skill</h2>
<form action="{{URL::to('update-skill') }}" method="get" style="margin-left: 50px">
    <div class="form-group">
        <div>
            <label>Skill Name</label>
            <input type="text" id="project-name" class="form-control"
                   name="name" value="{{$data['name']}}">
            <input type="hidden" name="idProfile" value="{{$data['id_refrence']}}">
            <input type="hidden" name="id" value="{{$data['id']}}">
        </div>
    </div>
    <button type="submit" id="save-skill" class="btn btn1">Update</button>
</form>