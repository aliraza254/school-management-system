@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Teacher Attendance</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('teacher-attendance.index')}}">Teacher</a></li>
                        <li class="breadcrumb-item active">Add Teacher Attendance</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ ( route('students-attendance.store')) }}" class="needs-validation" novalidate method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Basic Details</span></h5>
                                </div>
                                <div id="lists" class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Select Class</label>
{{--                                        <select name="class" class="form-control select_class select2">--}}
{{--                                            <option value="">Select Class</option>--}}
{{--                                            @foreach($classes as $single)--}}
{{--                                                <option value="{{$single->id}}">{{$single->class.' '.$single->section}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Select Student List</label>
                                        <select id="studentDetails" name="student_ids[]" class="form-control select2" multiple>
                                            <option value="">Select Student</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Select Attendance Type </label>
                                        <select name="attendance_type" class="form-control">
                                            <option value="">Select Attendance Type</option>
                                            <option value="present">Present</option>
                                            <option value="absent">Absent</option>
                                            <option value="leave">On Leave</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="class">Date</label>
                                        <input type="date" name="date" class="form-control" required>
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
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".select_class").change(function(e){
        e.preventDefault();
        var formData = {
            class: $(this).val(),
        };
        $.ajax({
            type:'POST',
            url:"{{ route('std_attendance') }}",
            data:formData,
            success:function(res){
                if($.isEmptyObject(res.error)){
                    if(res.status == 200){
                        // console.log(res.studentDetails);
                        var studentDetails = res.studentDetails;
                        $("#studentDetails").append("<option value=''>Select Student</option>");
                        $('#studentDetails').empty();
                        $("#studentDetails").append("<option value=''>Select Student</option>");
                        $.each(studentDetails, function(index, value) {
                            $("#studentDetails").append("<option value="+value.student_id+">"+value.first_name +' '+ value.last_name+"</option>");
                        });

                    }
                }else{
                    console.log('testing  ', res.error);
                }
            }
        });

    });
</script>
