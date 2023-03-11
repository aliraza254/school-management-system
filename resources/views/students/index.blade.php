@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Students</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Students</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <button class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="{{ route('students.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                            <table class="table table-hover table-center mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>DOB</th>
                                        <th>Father Name</th>
                                        <th>Father CNIC</th>
                                        <th>Father Mobile</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($students) && count($students) > 0)
                                    @foreach( $students as $student )
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{route('students.show', $student->id)}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle"
                                                            src="/images/{{ $student->image }}" alt="User Image"></a>
                                                    <a href="{{route('students.show', $student->id)}}">{{ $student['first_name']. ' '.$student['last_name'] }}</a>
                                                </h2>
                                            </td>
                                            <td>{{ $student->get_class_details->class . $student->get_class_details->section }}</td>
                                            <td>{{ $student['dob'] }}</td>
                                            <td>{{ $student['father_name'] }}</td>
                                            <td>{{ $student['father_cnic'] }}</td>
                                            <td>{{ $student['father_mobile'] }}</td>
                                            <td class="text-right">
                                                <div class="actions d-flex justify-content-end">
                                                    <form action="{{ route('students.destroy',$student->id) }}" method="Post">
                                                        <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}"><i class="fas fa-pen"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                    </form>
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
