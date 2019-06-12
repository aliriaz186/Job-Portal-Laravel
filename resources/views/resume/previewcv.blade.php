<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    .page-break {
        page-break-after: always;
    }
</style>
<body>
<div class="cv">
    <section class="sheet shadow">
        <div class="row pb-1 border-bottom">
            <div class="col-8 pt-4">
                <h4>Name: {{$basic['first_name']}}</h4>
                <h4>Father Name: {{$basic['last_name']}}</h4>
            </div>
        </div>
        <div class="row page-break">
            <div class="col-4 bg-light py-5">
                <div class="py-5" repeat.for="values of userProfile">
                    <div><i class="pr-2 fas fa-mobile-alt"></i>{{$basic['phone']}}</div>
                    <div><i class="pr-2 far fa-envelope d-inline"></i>{{$basic['email']}}</div>
                    <div><i class="pr-2 fas fa-map-marker-alt"></i>{{$basic['address']}}</div>
                    <div><i class="pr-2 far fa-calendar-alt"></i>{{$basic['date_of_birth']}}</div>
                </div>
                <h2 class="pt-5">Skills</h2>
                <ul>
                @foreach ($skills as $skl)
                        <li>{{$skl->name}}</li>
                @endforeach
                </ul>
            </div>
            <div class="col-8">
                <div class="p-3">


                    <h1>Experience</h1>
                    <div>
                        <div class="h5">{{$exp->position}}</div>
                        <div class="text-uppercase">{{$exp->company}} | From: {{$exp->start_date}} To: {{$exp->end_date}}.</div>
                        <div>{{$exp->description}}</div>
                    </div>
                    <h1>Education</h1>
                    <div>
                        <div class="h5">{{$edu->degree_name}}</div>
                        <div class="text-uppercase">{{$edu->degree_type}} | From: {{$edu->from}} To: {{$edu->to}}. </div>
                    </div>
                    <h1>Projects</h1>
                    <div repeat.for="values of userProject">
                        <div class="h5">{{$pro->name}}</div>
                        <div class="d-inline"><h6>Role</h6>{{$pro->role}}</div>
                        <div>
                            {{$pro->description}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>