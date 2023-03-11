@include('head')
@include('sidebar')
<div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Student Details</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('teachers.index')}}">Student</a></li>
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
                                        <img src="/images/{{ $teacher->image }}" class="mr-3" alt="...">
                                        <div class="media-body">
                                            <ul>
                                                <li>
                                                    <span class="title-span">Full Name : </span>
                                                    <span class="info-span">{{ $teacher->full_name }}</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Mobile : </span>
                                                    <span class="info-span">{{ $teacher->mobile }}</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Gender : </span>
                                                    <span class="info-span">{{ $teacher->gender }}</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">DOB : </span>
                                                    <span class="info-span">{{ $teacher->dob }}</span>
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
                                                <span class="title-span">Joining_date : </span>
                                                <span class="info-span">{{ $teacher->joining_date }}</span>
                                            </li>
                                            <li>
                                                <span class="title-span">Qualification : </span>
                                                <span class="info-span">{{ $teacher->qualification }}</span>
                                            </li>
                                            <li>
                                                <span class="title-span">Experience : </span>
                                                <span class="info-span">{{ $teacher->experience }}</span>
                                            </li>
                                            <li>
                                                <span class="title-span">Salary : </span>
                                                <span class="info-span">{{ $teacher->salary }}</span>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span class="title-span">Address : </span>
                                                <span class="info-span">{{ $teacher->address}}</span>
                                            </li>
                                            <li>
                                                <span class="title-span">City: </span>
                                                <span class="info-span">{{ $teacher->city }}</span>
                                            </li>
                                            <li>
                                                <span class="title-span">State: </span>
                                                <span class="info-span">{{ $teacher->state }}</span>
                                            </li>
                                            <li>
                                                <span class="title-span">Country : </span>
                                                <span class="info-span">{{ $teacher->country }}</span>
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
                                <th>Salary</th>
                                <th>Pais Date</th>
                                <th>Fine</th>
                                <th>Security</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($teacherDetails) && count($teacherDetails) > 0)
                                @foreach( $teacherDetails as $single )
                                    <tr>
                                        <td>{{ $i++}}</td>
                                        <td>{{ $teacher->full_name}}</td>
                                        <td>{{$single->paid_amount}}</td>
                                        <td>{{$single->paid_date}}</td>
                                        <td>{{$single->fine}}</td>
                                        <td>{{$single->security}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                </div>
            </div>

            <footer>
                <p>Copyright © 2020 Web Tech Softs.</p>
            </footer>

        </div>
@include('script')
