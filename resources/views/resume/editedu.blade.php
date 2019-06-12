<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<h2 align="center">Edit Experience</h2>
<form action="{{URL::to('update-edu') }}" method="get" style="margin-left: 50px">
    <div class="form-group">
        <div>
            <label>Degree Name</label>
            <input type="text" id="degree" class="form-control"
                   name="degree" value="{{$data['degree_name']}}">
            <input type="hidden" name="idProfile" value="{{$data['id_profile']}}">
            <input type="hidden" name="id" value="{{$data['id']}}">
        </div>
    </div>
    <div class="row w-75">
        <div class="col-6">
            <div class="form-group">
                <div>
                    <label>Obtained Marks</label>
                    <input type="text" id="obtained-marks" class="form-control"
                           name="obtainedMarks" value="{{$data['obtained_marks']}}">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <div>
                    <label>Total Marks</label>
                    <input type="number" id="total-marks" class="form-control"
                           name="totalMarks" value="{{$data['total_marks']}}">

                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div>
            <label>Degree Type</label>
            <select class="form-control" id="degree-type"
                    name="degreeType">
                <option value="BS" @if($data['degree_type'] == "BS") selected @endif>BS</option>
                <option value="MS" @if($data['degree_type'] == "MS") selected @endif>MS</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <div>
                    <label>From</label>
                    <input type="date" class="form-control" id="from"
                           placeholder="Degree started" name="from" value="{{$data['from']}}">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <div>
                    <label>To</label>
                    <input type="date" class="form-control" id="to"
                           placeholder="Degree Ended" name="to" value="{{$data['to']}}">
                </div>
            </div>
        </div>
    </div>
    <button type="submit" id="save-education" class="btn btn1">Update</button>
</form>