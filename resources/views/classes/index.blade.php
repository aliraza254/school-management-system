@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Classes</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Class</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                        Download</a>
                    <a href="{{ route('classes.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Class Fee</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($classes) && count($classes) > 0)
                                        @foreach( $classes as $class )
                                            <tr>
                                                <td>{{$class['class']}}</td>
                                                <td>{{$class['section']}}</td>
                                                <td>{{$class['fees']}}</td>
                                                <td class="text-right">
                                                    <div class="actions d-flex justify-content-end">
                                                        <form action="{{ route('classes.destroy',$class->id) }}" method="Post">
                                                            <a class="btn btn-primary" href="{{ route('classes.edit',$class->id) }}"><i class="fas fa-pen"></i></a>
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
