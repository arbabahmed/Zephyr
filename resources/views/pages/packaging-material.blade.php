@extends('layouts.default')

@section('content_header','Packading Material')

@section('content')

<!-- Default box -->
<div class="col-md-12">
    <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">   Packading Material</h3>

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

                    <h1>Packaging Material Dispensing Form</h1>
                    <div class="panel-body">


                        <form action="action.php" id="material" >


                            <div class="control-group after-add-more">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4>Material</h4>
                                        <input type="text" name="addmore-1" class="form-control" placeholder="Enter Material">
                                    </div>
                                    <div class="col-lg-4">
                                        <h4>Product Name</h4>
                                        <input type="Text" name="adding-1" class="form-control add-value1" placeholder="Product Name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-2">
                                        <h4>B.#:</h4>
                                        <input type="Text" name="bname-1" class="form-control add-value1" placeholder="Enter ">
                                    </div>
                                    <div class="col-lg-2">
                                        <h4>B.Size:</h4>
                                        <input type="Text" name="bsize-1" class="form-control add-value1" placeholder="Enter Size">
                                    </div>
                                    <div class="col-lg-2">
                                        <h4>Q.C.#:</h4>
                                        <input type="Text" name="qc-1" class="form-control add-value1" placeholder="Enter Q.C">
                                    </div>
                                    <div class="col-lg-2">
                                        <h4>G.R.N.:</h4>
                                        <input type="Text" name="grn-1" class="form-control add-value1" placeholder="Enter G.N">
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4>Quantity Required:</h4>
                                        <input type="Text" name="quantityr-1" class="form-control add-value1" placeholder="Enter Q.R">
                                    </div>
                                    <div class="col-lg-4">
                                        <h4>Quantity Issued:</h4>
                                        <input type="Text" name="quantityi-1" class="form-control add-value1" placeholder="Enter Q.I">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4>Issued By:</h4>
                                        <input type="Text" name="issued-1" class="form-control add-value1" placeholder="Issued By">
                                    </div>
                                    <div class="col-lg-4">
                                        <h4>Checked By Store Incharge:</h4>

                                        <label>
                                            <input type="checkbox" class="minimal"  name="chkstoredincharge-1">
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4>Checked By Production:</h4>

                                        <label>
                                            <input type="checkbox" class="minimal"  name="chkproduction-1">
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4>Checked By Q.A:</h4>

                                        <label>
                                            <input type="checkbox" class="minimal"  name="chkqa-1">
                                        </label>
                                    </div>
                                </div>

                                <br/>

                                <div class="row">
                                    <div  class=" control-group mt-4">
                                        <div class="col-lg-8" >
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="input-group-btn">
                                                <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                            </div>
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
        <!-- /.box -->
</div>
@endsection

@section('footer-scripts')

@endsection