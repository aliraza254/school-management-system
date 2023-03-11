@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Fees</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('fees.index')}}">Fees Collection</a></li>
                        <li class="breadcrumb-item active">Add Fees</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action=" {{ route('fees.store') }}"  method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Fees Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Fee Type</label>
                                        <select name="fee_type" class="form-control fee_type">
                                            <option value="">Select Option</option>
                                            <option value="Admission No">Admission No</option>
                                            <option value="Student Name">Student Name</option>
                                            <option value="Family">Family</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 row">

                                    <div class="col-12 col-sm-6 std_reg_no">
                                        <div class="form-group">
                                            <label>Admission No</label>
                                            <select name="reg_id" class="form-control std_reg_id select2 @error('reg_id') is-invalid @enderror">
                                                <option>Please Select Student</option>
                                                @foreach($student as $single)
                                                    <option value="{{$single->id}}">{{$single->first_name.' '.$single->last_name.' ('.$single->admission_number.')'}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 std_name">
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <select name="std_id" class="form-control std_reg_id select2">
                                                <option>Please Select Student</option>
                                                @foreach($student as $single)
                                                    <option value="{{$single->id}}">{{$single->first_name.' '.$single->last_name.' ('.$single->admission_number.')'}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 family_std">
                                        <div class="form-group">
                                            <label>Father Cnic</label>
                                            <select name="cnic" class="form-control std_family select2 @error('cnic') is-invalid @enderror">
                                                <option>Please Select Father CNIC</option>
                                                @foreach($student as $single)
                                                    <option value="{{$single->father_cnic}}">{{$single->father_cnic}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 hide">
                                        <div class="form-group">
                                            <label>Fees Type</label>
                                            <select name="type" class="form-control @error('type') is-invalid @enderror">
                                                <option value="">Select Fees Type</option>
                                                <option value="class">Class</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 hide">
                                        <div class="form-group">
                                            <label>Total Fee Amount</label>
                                            <input name="amount" id="reg_amount" type="number" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 hide">
                                        <div class="form-group">
                                            <label>Paid Date</label>
                                            <input type="date" name="paid_date" class="form-control @error('paid_date') is-invalid @enderror">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" name="save_fees" class="btn btn-primary">Submit</button>
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

    $(".std_reg_id").change(function(e){

        e.preventDefault();
        var formData = {
            std_id: $(this).val(),
        };
        $.ajax({
            type:'POST',
            url:"{{ route('std_name') }}",
            data:formData,
            success:function(data){
                console.log(data);
                if($.isEmptyObject(data.error)){
                    if(data.status == 200){
                        $('#reg_amount').val(data.fee_amount);
                    }
                }else{
                    console.log('testing  ', data.error);
                }
            }
        });

    });

    $(".std_family").change(function(e){
        e.preventDefault();
        var formData = {
            fatherCnic: $(this).val(),
        };
        $.ajax({
            type:'POST',
            url:"{{ route('family_records') }}",
            data:formData,
            success:function(data){
                console.log(data);
                if($.isEmptyObject(data.error)){
                    $('#reg_amount').val(data.fee_amount);
                }else{
                    console.log('testing  ', data.error);
                }
            }
        });

    });
</script>

