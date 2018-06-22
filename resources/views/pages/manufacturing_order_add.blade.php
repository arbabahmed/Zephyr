@extends('layouts.default')

@section('content_header','Manufacturing Order')

@section('content')

<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Add -Manufacturing Order</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Product Info</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Product Ingredients</a></li>

                            <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <div class="container">
                                    <h1>Manufacturing Order</h1>
                                    <div class="panel-body">

                                        <form action="action.php">

                                            <div class="control-group">

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h3>Product Name</h3>
                                                        <input type="text" name="pname" class="form-control" placeholder="Product Name">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <h3>Description</h3>
                                                        <input type="text" name="description" class="form-control add-value1" required="required" placeholder="Description">
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h3>Batch Size</h3>
                                                        <input type="number" name="bsize" class="form-control" placeholder="Batch Size">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <h3>Unit</h3>
                                                            <select class="form-control" name="unit" data-placeholder="Unit">
                                                                <option>Kg</option>
                                                                <option>Gram</option>
                                                                <option>Ltr.</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h3>Batch.No</h3>
                                                        <input type="number" name="b.number" class="form-control" placeholder="Batch No">
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h3>Issued date</h3>
                                                        <input type="date" name="idate" class="form-control">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h3>Verify By QAM</h3>
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="checkbox" class="minimal">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <h3> Verify By PM</h3>
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="checkbox" class="minimal">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-4">
                                                        <h3>MO Issued By</h3>
                                                        <input type="text" name="issueby" class="form-control add-value1" required="required" placeholder="Issued By">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <h3>Check By</h3>
                                                        <input type="text" name="checkby" class="form-control add-value1" required="required" placeholder="Check By">
                                                    </div>

                                                </div>
                                            </div>

                                        </form>

                                    </div>

                                </div>

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                                <div class="container">
                                    <h1>Manufacturing Order</h1>
                                    <div class="panel-body">

                                        <form action="action.php" id="manu-order">

                                            <div class="control-group after-add-more">

                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <h3>Code No</h3>
                                                        <input type="text" name="codeno-1" class="form-control" placeholder="Code No">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <h3>Qty/5ml(mg)</h3>
                                                        <input type="text" name="qty-1" class="form-control add-value1" required="required" placeholder="Quantity">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <h3>Ingredient</h3>
                                                        <input type="text" name="ingredient-1" class="form-control add-value1" required="required" placeholder="Ingredient">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <h3>Unit</h3>
                                                            <select class="form-control" name="unit-1" data-placeholder="Unit">
                                                                <option>Kg</option>
                                                                <option>Gram</option>
                                                                <option>Ltr.</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h3>Assigned Qty</h3>
                                                        <input type="text" name="aqty-1" class="form-control add-value1" required="required" placeholder="Assigned Quantity">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h3>Issued Qty</h3>
                                                        <input type="text" name="iqty-1" class="form-control add-value1" required="required" placeholder="Issued Quantity">
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h3>Issued By Warehouse</h3>
                                                        <input type="text" name="warehouse-1" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <h3>Verified By QA</h3>
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="checkbox" class="minimal">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h3>Recieved By Prod.</h3>
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="checkbox" class="minimal">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-8">
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                        <br>
                                        <br>
                                        <div class="row">

                                            <div class=" control-group mt-4">
                                                <div class="col-lg-2">
                                                    <button class="btn btn-primary mt-1 " type="button"><i class="glyphicon glyphicon-plus"></i> Sum</button>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input readonly="" type="number" name="total-quantity" class="form-control add-value pt-1" placeholder="Total mg">
                                                </div>
                                                <div class="col-lg-2">
                                                    <input readonly="" type="number" name="total-amount" class="form-control add-value2 pt-1" placeholder="Total Assigned Qty">
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- /.tab-pane -->

                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>

        </div>
        <!-- /.box-body -->

        <!-- /.box-footer-->
    </div>
</div>
@endsection

@section('footer-scripts')

@endsection