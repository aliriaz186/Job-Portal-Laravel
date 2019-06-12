<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<div class="container">
    <h1 class="text-center">Edit a Job</h1>
    <form action="{{URL::to('update-job') }}" method="get">
        <div class="form-group">
            <label>Company:</label>
            <input type="text" class="form-control" id="company-name" name="company_name" value="{{$data['company_name']}}">
            <input type="hidden" name="id" value="{{$data['id']}}">
        </div>
        <div class="form-group">
            <label>Job title:</label>
            <input type="text" class="form-control" id="job-title" name="title" value="{{$data['title']}}">
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" rows="3" id="job-description" name="description">{{$data['description']}}</textarea>
        </div>
        <div class="form-group">
            <label>Experience</label>
            <select type="text" class="form-control" id="experience" name="experience">
                <option value="Less than 1 year" @if($data['experience'] == "Less than 1 year") selected @endif>Less than 1 year</option>
                <option value="1 year" @if($data['experience'] == "1 year") selected @endif>1 year</option>
                <option value="2 year" @if($data['experience'] == "2 year") selected @endif>2 year</option>
                <option value="3 year" @if($data['experience'] == "3 year") selected @endif>3 year</option>
                <option value="4 year" @if($data['experience'] == "4 year") selected @endif>4 year</option>
                <option value="5 year" @if($data['experience'] == "5 year") selected @endif>5 year</option>
            </select>
        </div>
        <div class="form-group">
            <label for="min-salary">Min Salary</label>
            <select type="text" class="form-control" id="min-salary" name="minSalary">
                <option value="10k" @if($data['min_salary'] == "10k") selected @endif>10k</option>
                <option value="20k" @if($data['min_salary'] == "20k") selected @endif>20k</option>
                <option value="30k" @if($data['min_salary'] == "30k") selected @endif>30k</option>
                <option value="40k" @if($data['min_salary'] == "40k") selected @endif>40k</option>
                <option value="50k" @if($data['min_salary'] == "50k") selected @endif>50k</option>
                <option value="60k" @if($data['min_salary'] == "60k") selected @endif>60k</option>
                <option value="70k" @if($data['min_salary'] == "70k") selected @endif>70k</option>
                <option value="80k" @if($data['min_salary'] == "80k") selected @endif>80k</option>
                <option value="90k" @if($data['min_salary'] == "90k") selected @endif>90k</option>
                <option value="100k" @if($data['min_salary'] == "100k") selected @endif>100k</option>
                <option value="120k" @if($data['min_salary'] == "120k") selected @endif>120k</option>
                <option value="150k" @if($data['min_salary'] == "150k") selected @endif>150k</option>
                <option value="200k" @if($data['min_salary'] == "200k") selected @endif>200k</option>
                <option value="250k" @if($data['min_salary'] == "250k") selected @endif>250k</option>
            </select>
        </div>
        <div class="form-group">
            <label>Max Salary</label>
            <select type="text" class="form-control" id="max-salary" name="maxSalary">
                <option value="10k" @if($data['max_salary'] == "10k") selected @endif>10k</option>
                <option value="20k" @if($data['max_salary'] == "20k") selected @endif>20k</option>
                <option value="30k" @if($data['max_salary'] == "30k") selected @endif>30k</option>
                <option value="40k" @if($data['max_salary'] == "40k") selected @endif>40k</option>
                <option value="50k" @if($data['max_salary'] == "50k") selected @endif>50k</option>
                <option value="60k" @if($data['max_salary'] == "60k") selected @endif>60k</option>
                <option value="70k" @if($data['max_salary'] == "70k") selected @endif>70k</option>
                <option value="80k" @if($data['max_salary'] == "80k") selected @endif>80k</option>
                <option value="90k" @if($data['max_salary'] == "90k") selected @endif>90k</option>
                <option value="100k" @if($data['max_salary'] == "100k") selected @endif>100k</option>
                <option value="120k" @if($data['max_salary'] == "120k") selected @endif>120k</option>
                <option value="150k" @if($data['max_salary'] == "150k") selected @endif>150k</option>
                <option value="200k" @if($data['max_salary'] == "200k") selected @endif>200k</option>
                <option value="250k" @if($data['max_salary'] == "250k") selected @endif>250k</option>
            </select>
        </div>
        <div class="form-group">
            <label for="total-positons">Total Positions</label>
            <select type="text" class="form-control" id="total-positons" name="totalPositions">
                <option value="">--Please Select--</option>
                <option value="1" @if($data['total_positions'] == "1") selected @endif>1</option>
                <option value="2" @if($data['total_positions'] == "2") selected @endif>2</option>
                <option value="3" @if($data['total_positions'] == "3") selected @endif>3</option>
                <option value="4" @if($data['total_positions'] == "4") selected @endif>4</option>
                <option value="5" @if($data['total_positions'] == "5") selected @endif>5</option>
                <option value="10" @if($data['total_positions'] == "10") selected @endif>10</option>
                <option value="15" @if($data['total_positions'] == "15") selected @endif>15</option>
            </select>
        </div>
        <div class="form-group">
            <label for="job-location">Job Location</label>
            <select type="text" class="form-control" id="job-location" name="jobLocation">
                <option value="">--Please Select--</option>
                <option value="Lahore" @if($data['job_location'] == "Lahore") selected @endif>Lahore</option>
                <option value="Karachi"  @if($data['job_location'] == "Karachi") selected @endif>Karachi</option>
                <option value="Islamabad"  @if($data['job_location'] == "Islamabad") selected @endif>Islamabad</option>
            </select>
        </div>
        <div class="form-group">
            <label for="gender">Gender Prefrence</label>
            <select type="text" class="form-control" id="gender" name="gender">
                <option value="Male" @if($data['gender'] == "Male") selected @endif>Male</option>
                <option value="Female" @if($data['gender'] == "Female") selected @endif>Female</option>
                <option value="Transgender" @if($data['gender'] == "Transgender") selected @endif>Transgender</option>
                <option value="No Prefrence" @if($data['gender'] == "No Prefrence") selected @endif>No Prefrence</option>
            </select>
        </div>
        <div class="form-group">
            <label>Industry</label>
            <select type="text" class="form-control" id="industry" name="industry">
                <option value="Web and IT" @if($data['industry'] == "Web and IT") selected @endif>Web and IT</option>
                <option value="Engeenering" @if($data['industry'] == "Engeenering") selected @endif>Engeenering</option>
            </select>
        </div>
        <button type="submit" class="btn btn1 mx-2" >Update
        </button>
    </form>
</div>
