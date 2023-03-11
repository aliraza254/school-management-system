@include('head')
@include('sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Expenses</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('expenses.index')}}">Expenses</a></li>
                        <li class="breadcrumb-item active">Add Expenses</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ ( route('expenses.store')) }}" class="needs-validation" novalidate method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Expense Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="itemName">Item Name</label>
                                        <input type="text" name="name" class="form-control" id="itemName" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="itemQuality">Item Quality</label>
                                        <input type="text" name="quality" class="form-control" id="itemQuality" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="expenseAmount">Expense Amount</label>
                                        <input type="number" name="amount" class="form-control" id="expenseAmount" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="sop">Source of Purchase</label>
                                        <input type="text" name="sop" class="form-control" id="sop" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="purchaseDate">Purchase Date</label>
                                        <input type="date" name="date" class="form-control" id="purchaseDate" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="purchaseBy">Purchase By</label>
                                        <select name="purchase_by" class="form-control select2" id="purchaseBy" required>
                                            <option value="">Select Teacher</option>
                                            @foreach($techers as $single)
                                                <option value="{{$single->id}}" >{{$single->full_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit"  name="save_expenses" class="btn btn-primary">Submit</button>
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
