<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<h2 align="center">Create Experience</h2>
<form action="{{URL::to('save-exp') }}" method="get" style="margin-left: 50px">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <div>
                    <label>Start Date</label>
                    <input type="date" class="form-control" id="start-date"
                           name="startDate">
                    <input type="hidden" name="profileId" value="{{$idProfile}}">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <div validation-errors="errors.bind:endDateErrors">
                    <label>End Date</label>
                    <input type="date" id="end-date" class="form-control"
                           name="endDate">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div >
            <label>Position</label>
            <input  type="text" id="position" class="form-control"
                    name="position">
        </div>
    </div>
    <div class="form-group">
        <div>
            <label id="company1">Company</label>
            <input type="text" id="company" class="form-control"
                   name="company">
        </div>
    </div>
    <div class="form-group">
        <label>Description:</label>
        <textarea id="description1" class="form-control" rows="3"
                  name="experienceDescription"></textarea>
    </div>
    <button type="submit" id="save-experience" class="btn btn1">Save</button>
</form>