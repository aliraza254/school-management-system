@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Teachers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Teachers</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                        Download</a> -->
                        <button class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="{{ route('teachers.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>DOB</th>
                                        <th>Gender</th>
                                        <th>Entry Level</th>
                                        <th>Mobile Number</th>
                                        <th>Address</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($teacher) && count($teacher) > 0)
                                    @foreach( $teacher as $teacher )
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{route('teachers.show', $teacher->id)}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/images/{{ $teacher->image }}" alt="User Image"></a>
                                                <a href="{{route('teachers.show', $teacher->id)}}">{{$teacher['full_name']}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$teacher['dob']}}</td>
                                        <td>{{$teacher['gender']}}</td>
                                        <td>{{$teacher['qualification']}}</td>
                                        <td>{{$teacher['experience']}}</td>
                                        <td>{{$teacher['address']}}</td>
                                        <td class="text-right">
                                            <div class="actions d-flex justify-content-end">
                                                <form action="{{ route('teachers.destroy',$teacher->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id) }}"><i class="fas fa-pen"></i></a>
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

