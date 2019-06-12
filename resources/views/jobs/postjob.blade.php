<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<div class="container">
    <h1 class="text-center">Post a Job</h1>
    <form action="{{URL::to('save-job') }}" method="get">
        <div class="form-group">
            <label>Company:</label>
            <input type="text" class="form-control" id="company-name" name="company_name">
        </div>
        <div class="form-group">
            <label>Job title:</label>
            <input type="text" class="form-control" id="job-title" name="title">
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" rows="3" id="job-description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Experience</label>
            <select type="text" class="form-control" id="experience" name="experience">
                <option value="">--Please Select--</option>
                <option value="Less than 1 year">Less than 1 year</option>
                <option value="1 year">1 year</option>
                <option value="2 year">2 year</option>
                <option value="3 year">3 year</option>
                <option value="4 year">4 year</option>
                <option value="5 year">5 year</option>
            </select>
        </div>
        <div class="form-group">
            <label for="min-salary">Min Salary</label>
            <select type="text" class="form-control" id="min-salary" name="minSalary">
                <option value="">--Please Select--</option>
                <option value="10k">10k</option>
                <option value="20k">20k</option>
                <option value="30k">30k</option>
                <option value="40k">40k</option>
                <option value="50k">50k</option>
                <option value="60k">60k</option>
                <option value="70k">70k</option>
                <option value="80k">80k</option>
                <option value="90k">90k</option>
                <option value="100k">100k</option>
                <option value="120k">120k</option>
                <option value="150k">150k</option>
                <option value="200k">200k</option>
                <option value="250k">250k</option>
            </select>
        </div>
        <div class="form-group">
            <label>Max Salary</label>
            <select type="text" class="form-control" id="max-salary" name="maxSalary">
                <option value="">--Please Select--</option>
                <option value="10k">10k</option>
                <option value="20k">20k</option>
                <option value="30k">30k</option>
                <option value="40k">40k</option>
                <option value="50k">50k</option>
                <option value="60k">60k</option>
                <option value="70k">70k</option>
                <option value="80k">80k</option>
                <option value="90k">90k</option>
                <option value="100k">100k</option>
                <option value="120k">120k</option>
                <option value="150k">150k</option>
                <option value="200k">200k</option>
                <option value="250k">250k</option>
            </select>
        </div>
        <div class="form-group">
            <label for="total-positons">Total Positions</label>
            <select type="text" class="form-control" id="total-positons" name="totalPositions">
                <option value="">--Please Select--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
        </div>
        <div class="form-group">
            <label for="job-location">Job Location</label>
            <select type="text" class="form-control" id="job-location" name="jobLocation">
                <option value="">--Please Select--</option>
                <option value="Lahore">Lahore</option>
                <option value="Karachi">Karachi</option>
                <option value="Islamabad">Islamabad</option>
            </select>
        </div>
        <div class="form-group">
            <label for="gender">Gender Prefrence</label>
            <select type="text" class="form-control" id="gender" name="gender">
                <option value="">--Please Select--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Transgender">Transgender</option>
                <option value="No Prefrence">No Prefrence</option>
            </select>
        </div>
        <div class="form-group">
            <label>Industry</label>
            <select type="text" class="form-control" id="industry" name="industry">
                <option value="">--Please Select--</option>
                <option value="Web and IT">Web and IT</option>
                <option value="Engeenering">Engeenering</option>
            </select>
        </div>
        <div class="form-group">
            <label>Skills Required(Comma separated)</label>
            <input class="form-control mt-2" id="skill" name="skills" type="text">
        </div>
        <button type="submit" class="btn btn1 mx-2" id="create-job" >Create
        </button>
    </form>
</div>
