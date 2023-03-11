@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Fees</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('classes.index')}}">Class</a></li>
                        <li class="breadcrumb-item active">Add Class</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ ( route('classes.store')) }}" class="needs-validation" novalidate method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Add Class</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="class">Class</label>
                                        <input type="number" name="class" id="class" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="section">Section</label>
                                        <input type="text" name="section" class="form-control" id="section" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="feesAmount">Fees Amount</label>
                                        <input type="number" name="fees" class="form-control" id="feesAmount" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="save_class" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('script')
