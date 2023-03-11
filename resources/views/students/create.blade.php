@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Students</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('students.index') }}">Students</a></li>
                        <li class="breadcrumb-item active">Add Students</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ ( route('students.store')) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Student Information</span></h5>
                                </div>
                                <input name="id" type="hidden" class="form-control">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group" >
                                        <label>First Name</label>
                                        <input name="first_name" type="text" class="@error('first_name') is-invalid @enderror form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Class</label>
                                            <select name="class" class="std_class form-control class @error('class') is-invalid @enderror select2">
                                                <option value="">Select Class</option>
                                                @foreach($class as $single)
                                                    <option value="{{$single->id}}"  data-class_fee="{{$single->fees}}">{{$single->class.' '.$single->section}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student Fee</label>
                                        <input name="fee" value="" type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student Fee Discount</label>
                                        <input name="fee_discount" value="" type="number" class="form-control @error('fee_discount') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student Id</label>
                                        <input name="std_id" value="<?php echo 'BUI'.'-'.rand(100,999); ?>" type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Admission Number</label>
                                        <input name="admission_number" value="<?php echo 'BUI'.'-'.rand(0,999); ?>" type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                            <option value="" >Select Gender</option>
                                            <option value="Female" >Female</option>
                                            <option value="Male" >Male</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div>
                                            <input name="dob" type="date" class="form-control @error('dob') is-invalid @enderror">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Joining Date</label>
                                        <div>
                                            <input name="joining_date" type="date" class="form-control @error('joining_date') is-invalid @enderror">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <select name="religion" class="form-control @error('religion') is-invalid @enderror">
                                            <option value="" >Select Religion</option>
                                            <option value="Muslim" >Muslim</option>
                                            <option value="Christian" >Christian</option>
                                            <option value="Hindu" >Hindu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Student Image</label>
                                        <input name="image" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h5 class="form-title"><span>Parent Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Father's Name</label>
                                        <input name="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Father's Occupation</label>
                                        <input name="father_occupation" type="text" class="form-control @error('father_occupation') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Father's Mobile</label>
                                        <input name="father_mobile" type="text" class="form-control @error('father_mobile') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Father CNIC</label>
                                        <input name="father_cnic" type="number" class="form-control @error('father_cnic') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mother's Name</label>
                                        <input name="mother_name" type="text" class="form-control @error('mother_name') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mother's Occupation</label>
                                        <input name="mother_occupation" type="text" class="form-control @error('mother_occupation') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mother's Mobile</label>
                                        <input name="mother_mobile_number" type="text" class="form-control @error('mother_mobile_number') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Present Address</label>
                                        <textarea name="present_address" class="form-control @error('present_address') is-invalid @enderror"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Permanent Address</label>
                                        <textarea name="permanent_address" class="form-control @error('permanent_address') is-invalid @enderror"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="save_student" class="btn btn-primary">Submit</button>
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
