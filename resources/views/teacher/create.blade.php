@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Teachers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('teachers.index')}}">Teachers</a></li>
                        <li class="breadcrumb-item active">Add Teachers</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ ( route('teachers.store')) }}" class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Basic Details</span></h5>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input name="full_name" type="text" class="form-control" id="name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" class="form-control" id="gender" required>
                                            <option  value="">Select Gender</option>
                                            <option  value="Male">Male</option>
                                            <option  value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input name="dob" type="date" class="form-control" id="dob" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <input name="mobile" type="number" class="form-control" id="mobile" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="joiningDate">Joining Date</label>
                                        <input name="joining_date" type="date" class="form-control" id="joiningDate" required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="qualification">Qualification</label>
                                        <input name="qualification" class="form-control" id="qualification" type="text" required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="experience">Experience</label>
                                        <input name="experience" class="form-control" type="text" id="experience" required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="salary">Salary</label>
                                        <input name="salary" type="number" class="form-control" id="salary" required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="securityType">Security Type</label>
                                        <select name="security_type" class="form-control" id="securityType" required>
                                            <option  value="none">None</option>
                                            <option  value="1">Single</option>
                                            <option  value="2">Double</option>
                                            <option  value="3">Triple</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" class="form-control" id="image" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <h5 class="form-title"><span>Address</span></h5>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input name="address" type="text" class="form-control" id="address" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input name="city" type="text" class="form-control" id="city" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input name="state" type="text" class="form-control" id="state" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="zipCode">Zip Code</label>
                                        <input name="zipcode" type="number" class="form-control" id="zipCode" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input name="country" type="text" class="form-control" id="country" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="save_teacher" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('script')
