<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<html>
<div align="center">
    <h3>User Profile</h3>
    <p>{{$data['first_name']}}</p>
    <p>{{$data['last_name']}}</p>
    <p>{{$data['email']}}</p>
    <p>{{$data['phone']}}</p>
<br><br>
<a class="btn btn1" href="projects/{{$data['id_profile']}}">Projects</a>
<a class="btn btn1" href="experience/{{$data['id_profile']}}">Experience</a>
<a class="btn btn1" href="educations/{{$data['id_profile']}}">Education</a>
<a class="btn btn1" href="skills/{{$data['id_profile']}}">Skills</a>
    <br>
    <br>
    <br>
    <a class="btn btn1" href="preview-resume/{{$data['id_profile']}}">Preview CV</a>
    <a class="btn btn1" href="download-resume/{{$data['id_profile']}}">Download CV</a>

</div>
</html>