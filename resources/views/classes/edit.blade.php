@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Class List</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Class</li>
                    </ul>
                </div>
                <div class="col-auto text-right float-right ml-auto">
                    <!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                        Download</a> -->
                        <button class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</button>
                    <a href="./?page=add-class" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="">
                                    <div class="card-body">
{{--                                        @dd($classes)--}}
                                        <form  action="{{ route('classes.update', [$classes->id]) }}" class="needs-validation" novalidate method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="form-title"><span>Class Information</span></h5>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="class">Edit Class</label>
                                                        <input type="text" class="form-control" name="class" id="class" value="{{ $classes->class }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="srction">Section</label>
                                                        <input type="text" class="form-control" name="section" id="section" value="{{ $classes->section }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="feesAmount">Edit Class Fee</label>
                                                        <input type="text" class="form-control" name="fees" id="feesAmount" value="{{ $classes->fees }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit"  name="update_class"  class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
