<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<h2 align="center">Create Skill</h2>
<form action="{{URL::to('save-skill') }}" method="get" style="margin-left: 50px">
    <div class="form-group">
        <div>
            <label>Skill Name</label>
            <input type="text" id="project-name" class="form-control"
                   name="name">
            <input type="hidden" name="idProfile" value="{{$idProfile}}">
        </div>
    </div>
    <button type="submit" id="save-skill" class="btn btn1">Save</button>
</form>