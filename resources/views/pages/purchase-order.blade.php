@extends('layouts.default')

@section('content_header','Purchase Order')

@section('content')

<!-- Default box -->
<div class="col-md-12">
    <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Purchase Order</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">

                <div class="container">

                    <h1>Purchase Order</h1>
                    <div class="panel-body">


                        <form action="action.php" id="order" >


                            <div class=" control-group after-add-more">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>Item Name</h4>
                                        <input type="text" name="itemname-1" class="form-control" placeholder="Enter Item">
                                    </div>
                                    <div class="col-lg-2">
                                        <h4>Required For</h4>
                                        <select name="requiredfor-1" class="form-control add-value1" >
                                            <option value="blister">Blister Machine DP 150</option>
                                            <option value="saab"></option>
                                            <option value="fiat"></option>
                                            <option value="audi"></option>
                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <h4>Quantity</h4>
                                        <input type="text" name="quantity-1" class="form-control" placeholder="Quantity ">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Unit</h4>
                                        <select name="unit-1" class="form-control add-value1" >
                                            <option value="volvo">Pcs</option>
                                            <option value="saab"></option>
                                            <option value="fiat"></option>
                                            <option value="audi"></option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <h4>Rate</h4>
                                        <input type="number" name="rate-1" class="form-control" placeholder="Rate">
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4>Amount</h4>
                                        <input type="number" name="amount-1" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-lg-4">
                                        <h4>Required By</h4>
                                        <input type="Text" name="requiredby-1" class="form-control " placeholder="Required By">
                                    </div>
                                </div>

                                <br/>

                                <div class="row">
                                    <div  class=" control-group mt-4">
                                        <div class="col-lg-8" >
                                        </div>
                                        <div class="col-lg-1">
                                            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </form>
                        <br/>
                        <br/>
                        <div class="row">
                            <div class=" col-lg-1"></div>
                            <div  class=" control-group mt-4">
                                <div class="col-lg-2">
                                    <button class="btn btn-primary mt-1 " type="button"><i class="glyphicon glyphicon-plus"></i> Sum</button>
                                </div>
                                <div class="col-lg-2">
                                    <input readonly type="number" name="total-quantity" class="form-control add-value pt-1" placeholder="Total Quantity">
                                </div>
                                <div class="col-lg-2">
                                    <input readonly type="number" name="total-amount" class="form-control add-value1 pt-1" placeholder="Total Amount">
                                </div>
                            </div>
                        <!-- Copy Fields -->






                </div>
            </div>





        </div>



            </div>
            <!-- /.box-body -->

            <!-- /.box-footer-->
        </div>
</div>
@endsection

@section('footer-scripts')

@endsection