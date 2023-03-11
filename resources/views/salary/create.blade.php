@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Salary</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('salary.index')}}">Salary</a></li>
                        <li class="breadcrumb-item active">Add Salary</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                    <p class="m-0">{{ $message }}</p>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ ( route('salary.store')) }}" class="needs-validation" novalidate method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Salary Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="teacher_id">Teachers</label>
                                        <select name="teacher_id" class="form-control select_teacher" id="teacher_id" required>
                                            <option value="">Select Teacher</option>
                                            @foreach($teacher as $single)
                                                <option value="{{$single->id}}">{{$single->full_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Paid Amount</label>
                                        <input type="number" id="paidAmount" name="paid_amount" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="paidDate">Paid Date</label>
                                        <input type="date" name="paid_date" class="form-control" id="paidDate" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 ">
                                    <div class="form-group">
                                        <label for="select_reduction_type">Reduction Type</label>
                                        <select name="reduction_type" class="form-control" id="select_reduction_type" required>
                                            <option value="" > Select Type</option>
                                            <option value="Fine" > Fine</option>
                                            <option value="Security" >Security</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 hide_fine" id="show_fine">
                                    <div class="form-group">
                                        <label>Fine</label>
                                        <input type="number" name="fine" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 hide_advance" id="show_security">
                                    <div class="form-group">
                                        <label>Security</label>
                                        <input type="number" name="security" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="save_salary" class="btn btn-primary">Submit</button>
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

    $(".select_teacher").change(function(e){
        e.preventDefault();
        var formData = {
            teacher: $(this).val(),
        };
        $.ajax({
            type:'POST',
            url:"{{ route('salary_records') }}",
            data:formData,
            success:function(res){
                if($.isEmptyObject(res.error)){
                    if(res.status == 200){
                        $('#paidAmount').val(res.teacherSalary);
                    }
                }else{
                    console.log('testing  ', res.error);
                }
            }
        });

    });
</script>
