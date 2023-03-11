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
                        @foreach($days as $day)
                        <th>{{$day}}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($attendanceDetails) && count($attendanceDetails) > 0)
                        @foreach( $attendanceDetails as $single )
                            <tr>
                                <td>{{$single->paid_amount}}</td>
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
