@extends('layouts.default')

@section('content_header','Essential Item')

@section('content')

<!-- Default box -->
<div class="col-md-12">
     <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Essential Item</h3>

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

                    <h1>Essential Item</h1>
                    <div class="panel-body">

                        <form action="action.php" id="materials" >


                            <div class=" control-group after-add-more">

                                <div class="row">
                                    <div class="col-lg-3">
                                        <h4>Item</h4>
                                        <input type="text" name="Item-1" class="form-control" placeholder="Enter Item">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Description</h4>
                                        <input type="Text" name="description-1" class="form-control add-value1" placeholder="Description">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Department</h4>
                                        <select name="department-1" class="form-control add-value1" >
                                            <option value="WD">WD</option>
                                            <option value="Picking">Picking</option>
                                            <option value="GI">GI</option>
                                            <option value="Die Shop">Die Shop</option>
                                            <option value="QC">QC</option>
                                            <option value="COMM">COMM</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-3">
                                        <h4>E.O.Q</h4>
                                        <input type="number" name="eoq-1" class="form-control add-value1" placeholder="Enter Size">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Minimum Quantity</h4>
                                        <input type="number" name="qc-1" class="form-control add-value1" placeholder="Enter Q.C">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Unit</h4>
                                        <select name="departments-1" class="form-control add-value1" >
                                            <option value="WD">Kg</option>
                                            <option value="COMM">Gram</option>
                                            <option value="Picking">Ltr.</option>
                                            <option value="GI">Ltrs.</option>
                                            <option value="Die Shop">Nos.</option>
                                            <option value="QC">Bags</option>
                                            <option value="COMM">Bundle</option>
                                            <option value="COMM">Roll</option>
                                            <option value="COMM">Cylinder</option>
                                            <option value="COMM">Cone</option>
                                            <option value="COMM">Ton</option>
                                            <option value="COMM">Set</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-3">
                                        <h4>Pack Size</h4>
                                        <input type="number" name="quantityr-1" class="form-control add-value1" placeholder="Pack size">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Closing Balance</h4>
                                        <input type="number" name="closing-balance-1" class="form-control add-value1" placeholder="Closing Balance">
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