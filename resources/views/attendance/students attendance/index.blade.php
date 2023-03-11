@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Students Attendance</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Students Attendance</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                        Download</a> -->
                    <button class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="{{route('students-attendance.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p class="m-0">{{ $message }}</p>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="teacher_index" class="table table-hover table-center mb-0 datatable">
                                <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Present</th>
                                    <th>Absent</th>
                                    <th>On Leave</th>
                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($attendanceDetails) && count($attendanceDetails) > 0)
                                    @foreach($attendanceDetails as $single)
                                        @php
                                            $absent = $present = $leave = 0;
                                        @endphp
                                       @foreach($single->get_attendance_details as $details)
                                           @php
                                               if($details->attendance_type == 'absent'){
                                                   $absent++;
                                               }
                                               else if($details->attendance_type == 'leave'){
                                                   $leave++;
                                               }else{
                                                   $present++;
                                               }
                                           @endphp
                                       @endforeach
                                            <tr>
                                                <td>{{$single->class.' '.$single->section}}</td>
                                                <td>{{$present}}</td>
                                                <td>{{$absent}}</td>
                                                <td>{{$leave}}</td>
                                                <td class="text-right">
                                                    <div class="actions d-flex justify-content-end">
                                                            <a class="btn btn-primary" href="{{route('students-attendance.show', $single->id)}}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                                </svg>
                                                            </a>
                                                    </div>
                                                </td>
                                            </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Copyright © 2022 Web Tech Softs.</p>
    </footer>

</div>
@include('script')
