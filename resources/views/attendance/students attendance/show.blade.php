@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Student Attendance Details</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('students-attendance.index')}}">Student</a></li>
                        <li class="breadcrumb-item active">Attendance Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <table class="datatable table table-stripped">
                    <thead>
                    <tr>
                        @for($day = 1; $day <= $monthDays; $day++)
                        <th></th>
                        <th>{{$day}}</th>
                        @endfor
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($data) && count($data) > 0)
                        @foreach( $data as $student )
                            <tr>
                                <td>{{$student->first_name}}</td>
                                @php
                                    for ($day = 1; $day <= $monthDays; $day++) {
                                        $cell = '-';
                                        foreach ($student->get_studentAttendance_details as $record) {
                                            $formattedDate = date('d', strtotime($record->date));
                                            if ($formattedDate == $day) {
                                                if ($record->attendance_type == 'present'){
                                                    $record->attendance_type = 'P';
                                                }elseif ($record->attendance_type == 'absent'){
                                                    $record->attendance_type = 'A';
                                                }else{
                                                    $record->attendance_type = 'L';
                                                }
                                                $cell = $record->attendance_type;
                                            }
                                        }
                                @endphp
                                <td>{{$cell}}</td>
                                <td></td>
                                @php
                                    }
                                @endphp
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            </div>
        </div>

        <footer>
            <p>Copyright © 2020 Web Tech Softs.</p>
        </footer>

    </div>
@include('script')
