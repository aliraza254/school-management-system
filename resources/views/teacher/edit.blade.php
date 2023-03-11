@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Edit Teachers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('teachers.index') }}">Teachers</a></li>
                        <li class="breadcrumb-item active">Edit Teachers</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('teachers.update',$teacher->id) }}" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Basic Details</span></h5>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="full_name" value="{{ $teacher->full_name }}"  id="name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" class="form-control " id="gender" required>
                                            <option  value="" @if ( $teacher->gender == '') {{'selected'}} @endif>Select Gender</option>
                                            <option  value="Male" @if ( $teacher->gender == 'Male') {{'selected'}} @endif>Male</option>
                                            <option  value="Female" @if ( $teacher->gender == 'Female') {{'selected'}} @endif>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" value="{{ $teacher->dob }}" id="dob" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <input type="number" class="form-control" name="mobile" value="{{ $teacher->mobile }}" id="mobile" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="joiningDate">Joining Date</label>
                                        <input type="date" class="form-control" name="joining_date" value="{{ $teacher->joining_date }}" id="joiningDate" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="qualification">Qualification</label>
                                        <input class="form-control" type="text" name="qualification" value="{{ $teacher->qualification }}" id="qualification" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="experience">Experience</label>
                                        <input class="form-control" type="text" name="experience" value="{{ $teacher->experience }}" id="experience" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="salary">Salary</label>
                                        <input type="number" class="form-control" name="salary" value="{{ $teacher->salary }}" id="salary" required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="securityType">Security Type</label>
                                        <select name="security_type" class="form-control " id="securityType" required>
                                            <option  value="none"   @if ($teacher->security_type == "none") {{'selected'}} @endif >None</option>
                                            <option  value="single" @if ($teacher->security_type == "single") {{'selected'}} @endif>Single</option>
                                            <option  value="double" @if ($teacher->security_type == "double") {{'selected'}} @endif>Double</option>
                                            <option  value="triple" @if ($teacher->security_type == "triple") {{'selected'}} @endif>Triple</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group ">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" class="form-control" id="image" >
                                    </div>
                                </div>

                                <div class="col-12">
                                    <h5 class="form-title"><span>Address</span></h5>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{ $teacher->address }}" id="address" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" value="{{ $teacher->city }}" id="city" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" name="state" value="{{ $teacher->state }}" id="state" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="zipCode">Zip Code</label>
                                        <input type="number" class="form-control" name="zipcode" value="{{ $teacher->zipcode }}" id="zipCode" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" name="country" value="{{ $teacher->country }}" id="country" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="update_teacher" class="btn btn-primary">Submit</button>
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
