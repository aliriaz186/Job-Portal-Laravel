<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<h2 align="center">Create Project</h2>
<form action="{{URL::to('save-project') }}" method="get" style="margin-left: 50px">
    <div class="form-group">
        <div>
            <label>Project Name</label>
            <input type="text" id="project-name" class="form-control"
                   name="projectName">
            <input type="hidden" name="idProfile" value="{{$idProfile}}">
        </div>
    </div>
    <div class="form-group">
        <div>
            <label>Role</label>
            <input type="text" id="role" class="form-control" name="roleInProject">
        </div>
    </div>
    <div class="form-group">
        <div>
            <label>Project Description</label>
            <textarea id="description" class="form-control" rows="3"
                      name="projectDescription"></textarea>
        </div>
    </div>
    <button type="submit" id="save-project" class="btn btn1">Save</button>
</form>