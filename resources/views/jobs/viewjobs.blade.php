<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
@include('layouts/navbar')
<h2 class="text-center my-4">Jobs</h2>
<div class="container">

        <div class="col-md-12 col-lg-10 col-xl-7 mx-auto">
            @if($result== 1)
                <h4 class="alert alert-success" align="center">Applied Successfully!</h4>
            @endif
            @if($result== 2)
                <h4 class="alert alert-danger" align="center">Already Applied!</h4>
            @endif
            @if($result== 3)
                <h4 class="alert alert-danger" align="center">Create Resume to Apply for Job!</h4>
            @endif
            <form>
                <div class="form-row">
                    <div class="col-14 col-md-10 mb-4 mb-md-0">
                        <input type="text" id="searchBar" class="form-control form-control-lg" placeholder="Type here....">
                    </div>
                </div>
            </form>
        </div>
</div>
<div class="row">
    <div class="container mx-auto rounded" id="mydiv">
        @foreach ($jobs as $job)
            <span class="card bg-light" id="innerdiv">
                <div class="card-body">
                    <h5 id="title">{{$job['job']->title}}</h5>
                    <p>{{$job['job']->company_name}}</p>
                    <p>{{$job['job']->description}}</p>
                    <a href="" class="px-2 text-dark text-decoration-none" title="Post date">{{$job['job']->date_created}}</a>
                    <a href="" class="px-2 text-dark text-decoration-none" title="Experince">{{$job['job']->experience}}</a>
                    <a href="" class="px-2 text-dark text-decoration-none" title="Expected Salary">{{$job['job']->min_salary}} - {{$job['job']->max_salary}}</a>
                    <br>
                    <span>Skills Required : </span>
                    @foreach ($job['job']->skill as $skl)
                    <a>{{$skl->name}}</a>
                    @endforeach
                    <span class="float-right">
                  <a  class="btn btn1" href="apply-for-job/{{$job['job']->id}}">Apply</a>
                    </span>
                </div>
            </span>
        @endforeach
    </div>
</div>
<script>
    $(document).ready(function(){
        var mydiv = document.getElementById("mydiv");
        innerdiv = mydiv.getElementsByTagName("div");
        var jobs = {!! json_encode($jobs) !!}

        $("#searchBar").on("keyup", function() {
        var value = $(this).val().toLowerCase();
            for (var i = 0; i < innerdiv.length; i++) {
                var title = innerdiv[i].getElementsByTagName("h5")[0].innerText;
                console.log(value);
                console.log(title);
                if (title.toLowerCase().indexOf(value) > -1) {
                    innerdiv[i].style.display = "";
                } else {
                    innerdiv[i].style.display = "none";
                }

            }
        });
    });
</script>