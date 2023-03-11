@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Edit Students</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('students.index') }}">Students</a></li>
                        <li class="breadcrumb-item active">Edit Students</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                            <form  action="{{ route('students.update',$student->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Student Information</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" name='first_name' value="{{ $student->first_name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" name='last_name' value="{{ $student->last_name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Class</label>
                                            <select name="class" class="form-control class @error('class') is-invalid @enderror select2">
                                                <option value="">Select Class</option>
                                                @foreach($class as $single)
                                                    <option value="{{$single->id}}" @if($single->id == $student->class) {{ 'selected' }} @endif>{{$single->class.' '.$single->section}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Student Id</label>
                                            <input type="text" class="form-control" name='std_id' value="{{ $student->std_id }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Admission Number</label>
                                            <input type="text" class="form-control" name='admission_number' value="{{ $student->admission_number }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control " required>
                                                <option  value="" @if ( $student->gender == '') {{'selected'}} @endif>Select Gender</option>
                                                <option  value="Male" @if ( $student->gender == 'Male') {{'selected'}} @endif>Male</option>
                                                <option  value="Female" @if ( $student->gender == 'Female') {{'selected'}} @endif>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Joining Date</label>
                                            <div>
                                                <input type="date" class="form-control @error('permanent_address') is-invalid @enderror" name='joining_date' value="{{ $student->joining_date }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <div>
                                                <input type="date" class="form-control @error('permanent_address') is-invalid @enderror" name='dob' value="{{ $student->dob }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Religion</label>
                                            <select name="religion" class="form-control @error('religion') is-invalid @enderror">
                                                <option value="" @if($student->religion == ''){{'selected'}}@endif>Select Religion</option>
                                                <option value="Muslim" @if($student->religion == 'Muslim'){{'selected'}}@endif>Muslim</option>
                                                <option value="Christian" @if($student->religion == 'Christian'){{'selected'}}@endif>Christian</option>
                                                <option value="Hindu" @if($student->religion == 'Hindu'){{'selected'}}@endif>Hindu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Student Image</label>
                                            <input type="file" name="image" class="form-control" placeholder="image">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Parent Information</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" name='father_name' value="{{ $student->father_name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Father's Occupation</label>
                                            <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" name='father_occupation' value="{{ $student->father_occupation }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Father's Mobile</label>
                                            <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" name='father_mobile' value="{{ $student->father_mobile }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Father's CNIC</label>
                                            <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" name='father_cnic' value="{{ $student->father_cnic }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Mother's Name</label>
                                            <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" name='mother_name' value="{{ $student->mother_name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Mother's Occupation</label>
                                            <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" name='mother_occupation' value="{{ $student->mother_occupation }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Mother's Mobile</label>
                                            <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" name='mother_mobile_number' value="{{ $student->mother_mobile_number }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Present Address</label>
                                            <input class="form-control @error('permanent_address') is-invalid @enderror" name='present_address' value="{{ $student->present_address }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Permanent Address</label>
                                            <input class="form-control @error('permanent_address') is-invalid @enderror" name='permanent_address' value="{{ $student->permanent_address }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="update_student" class="btn btn-primary">Submit</button>
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
