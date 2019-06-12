<html>
<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@include('layouts/navbar')
<div class="container">
    <h2 class="text-center">User Profile</h2>
    <form action="{{URL::to('save-resume') }}" method="get">
        <div>
            <div class="form-group">
                <div>
                    <label>First Name</label>
                    <input type="text" class="form-control" id="user-first-name"
                           placeholder="First name.." name="firstName">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label>Last Name</label>
                    <input type="text" class="form-control" id="user-last-name"
                           placeholder="Last name.." name="lastName">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div>
                <label>Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="">--Select--</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Transgender</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div>
                <label>Email</label>
                <input type="email" class="form-control" id="user-email"
                       placeholder="email@gmail.com" name="email">
            </div>
        </div>
        <div class="form-group">
            <div>
                <label>Contact No</label>
                <input type="text" class="form-control" id="user-contact-no"
                       placeholder="Contact no" name="contact">
            </div>
        </div>
        <div class="form-group">
            <div>
                <label>Experience</label>
                <select class="form-control" name="experience" id="experience">
                    <option value="">--Select--</option>
                    <option>less then a year</option>
                    <option>1 year</option>
                    <option>2 year</option>
                    <option>3 year</option>
                    <option>4 year</option>
                    <option>5 year</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div>
                <label>Date Of birth</label>
                <input type="date" class="form-control" name="dateOfBirth" id="date-of-birth">
            </div>
        </div>
        <div class="form-group">
            <div>
                <label>Address:</label>
                <input type="text" class="form-control" id="user-address" name="address">
            </div>
        </div>
        <button type="submit" class="btn btn1">Save</button>
    </form>
</div>
</html>