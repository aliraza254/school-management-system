@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Expenses</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Expenses</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <button class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="{{route('expenses.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                        <th>Item Name</th>
                                        <th>Item Quality</th>
                                        <th>Amount</th>
                                        <th>Purchase Source</th>
                                        <th>Purchase Date</th>
                                        <th>Purchase By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($expenses) && count($expenses) > 0)
                                    @foreach( $expenses as $single )
                                    <tr>
                                        <td>
                                            <h2>
                                                <a>{{$single['name']}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$single['quality']}}</td>
                                        <td>{{$single['amount']}}</td>
                                        <td>{{$single['sop']}}</td>
                                        <td>{{$single['date']}}</td>
                                        <td>{{$single->get_teacher_details->full_name}}</td>
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
