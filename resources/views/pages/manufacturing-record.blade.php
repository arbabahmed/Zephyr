@extends('layouts.default')

@section('content_header','Manufacturing Record')

@section('content')

<!-- Default box -->
<div class="col-md-12">
     <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">   Manufacturing Record</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Product Info</a></li>
                                <li><a href="#tab_2" data-toggle="tab">Master Formula</a></li>
                                <li><a href="#tab_3" data-toggle="tab">Packging Material</a></li>
                                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <div class="container">
                                        <h1>Batch Record</h1>
                                        <div class="panel-body">

                                            <form action="action.php" >


                                                <div class=" control-group after-add-more">

                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <h3>Product</h3>
                                                            <input type="text" name="product" class="form-control" placeholder="Product">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <h3>Mfg.Date</h3>
                                                            <input type="date" name="mfgdate" class="form-control add-value1"required="required" placeholder="Enter Target">
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <h3>Exp.Date</h3>
                                                            <input type="date" name="expdate" class="form-control" placeholder="Enter Name Here">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <h3>Batch No.</h3>
                                                            <input type="text" name="bnumber" class="form-control add-value1"required="required" placeholder="Batch No">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <h3>Batch Size</h3>
                                                            <input type="text" name="bsize" class="form-control" placeholder="Batch Size">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <h3> Weight In Kg</h3>
                                                            <input type="text" name="weight" class="form-control" placeholder="Enter Weight">
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h3>Strength</h3>
                                                            <input type="text" name="strenght" class="form-control" placeholder="Strength">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <h3>Size: Diameter</h3>
                                                            <input type="text" name="size" class="form-control add-value1"required="required" placeholder="Enter Size">
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <h3>Color</h3>
                                                            <div class="form-group">


                                                                <div class="input-group my-colorpicker2">
                                                                    <input type="color" class="form-control">

                                                                    <div class="input-group-addon">
                                                                        <i></i>
                                                                    </div>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-lg-7">
                                                            <h3>Physical Discription</h3>
                                                            <input type="text" name="discription" class="form-control add-value1"required="required" placeholder="Enter Target">
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
                                        <h1>Batch Record</h1>
                                        <div class="panel-body">

                                            <form action="action.php" >


                                                <div class=" control-group after-add-more">

                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <h3>Q.C</h3>
                                                            <input type="text" name="qc" class="form-control" placeholder="Enter Q.C"/>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h3>Ingredient</h3>
                                                            <input type="text" name="ingredient" class="form-control add-value1"required="required" placeholder="Ingredient">
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h3>Quantity Kg</h3>
                                                            <input type="text" name="qty" class="form-control" placeholder="Quantity/kg">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h3>Quantity/Tablet</h3>
                                                            <input type="text" name="qty1" class="form-control add-value1"required="required" placeholder="Quantity/Tablet">
                                                        </div>


                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h3>% W/W</h3>
                                                            <input type="text" name="addmore-1" class="form-control" placeholder="Enter">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <h3>Check By Production</h3>
                                                            <div class="form-group">
                                                                <label>
                                                                    <input type="checkbox" class="minimal" >
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <h3>Check By Q.C</h3>
                                                            <div class="form-group">
                                                                <label>
                                                                    <input type="checkbox" class="minimal" >
                                                                </label>
                                                                </div>
                                                        </div>
                                                    </div>


                                                </div>



                                            </form>

                                        </div>

                                    </div>




                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_3">


                                    <div class="container">
                                        <h1>Batch Record</h1>
                                        <div class="panel-body">

                                            <form action="action.php" >


                                                <div class=" control-group after-add-more">

                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <h3>Item</h3>
                                                            <input type="text" name="item" class="form-control" placeholder="Enter Item">
                                                        </div>

                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h3>Quantity Required</h3>
                                                            <input type="text" name="qtyrequired" class="form-control" placeholder="Quantity Required">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <h3>Check By Production</h3>
                                                            <div class="form-group">
                                                                <label>
                                                                    <input type="checkbox" class="minimal">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <h3>Check By Q.C</h3>
                                                            <div class="form-group">
                                                                <label>
                                                                    <input type="checkbox" class="minimal iCheck" >
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>



                                            </form>

                                        </div>

                                    </div>





                                </div>
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