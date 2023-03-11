@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Student Details</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('students.index')}}">Student</a></li>
                        <li class="breadcrumb-item active">Student Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-info">
                            <h4>About Me</h4>
                            <div class="media mt-3">
                                <img src="/images/{{ $student->image }}" class="mr-3" alt="...">
                                <div class="media-body">
                                    <ul>
                                        <li>
                                            <span class="title-span">Full Name : </span>
                                            <span class="info-span">{{ $student->first_name. ' '.$student->last_name }}</span>
                                        </li>
                                        <li>
                                            <span class="title-span">Class : </span>
                                            <span class="info-span">{{ $student->class }}</span>
                                        </li>
                                        <li>
                                            <span class="title-span">Gender : </span>
                                            <span class="info-span">{{ $student->gender }}</span>
                                        </li>
                                        <li>
                                            <span class="title-span">DOB : </span>
                                            <span class="info-span">{{ $student->dob }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="about-info col-12">
                        <div class="media mt-3">
                            <div class="media-body d-flex justify-content-between">
                                <ul>
                                    <li>
                                        <span class="title-span">Father Name : </span>
                                        <span class="info-span">{{ $student->father_name }}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Father Occupation : </span>
                                        <span class="info-span">{{ $student->father_occupation }}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Father Mobile : </span>
                                        <span class="info-span">{{ $student->father_mobile }}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Father Cnic : </span>
                                        <span class="info-span">{{ $student->father_cnic }}</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <span class="title-span">Mother Name : </span>
                                        <span class="info-span">{{ $student->mother_name}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Mother Occupation : </span>
                                        <span class="info-span">{{ $student->mother_occupation }}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Mother Mobile : </span>
                                        <span class="info-span">{{ $student->mother_mobile_number }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="datatable table table-stripped">
                    <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th>Fees</th>
                        <th>Pais Date</th>
                        <th>Annual Charges</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($studentDetails) && count($studentDetails) > 0)
                        @foreach( $studentDetails as $single )
                            <tr>
                                <td>{{ $i++}}</td>
                                <td>{{ $student->first_name.' '.$student->last_name }}</td>
                                <td>{{$single->amount}}</td>
                                <td>{{$single->paid_date}}</td>
                                <td>61</td>
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
