@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Salary</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Salary</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                        Download</a> -->
                        <button class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="{{ route('salary.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Paid Date</th>
                                        <th>Reduction Type</th>
                                        <th>Fine</th>
                                        <th>Advance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($salary) && count($salary) > 0)
                                    @foreach( $salary as $single )
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
{{--                                                    <a href="{{route('teachers.show', $single->teacher_id)}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/images/{{ $teacher->image }}" alt="User Image"></a>--}}
                                                    <a href="{{route('teachers.show', $single->teacher_id)}}">{{$single->get_teacher_details->full_name}}</a>
                                                </h2>
                                            </td>
                                            <td>{{$single['paid_amount']}}</td>
                                            <td>{{$single['paid_date']}}</td>
                                            <td>{{$single['reduction_type']}}</td>
                                            <td>{{$single['fine']}}</td>
                                            <td>{{$single['security']}}</td>
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

