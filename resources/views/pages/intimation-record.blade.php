@extends('layouts.default')

@section('content_header','Intimation Record')

@section('content')

<!-- Default box -->
<div class="col-md-12">
     <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Intimation Record</h3>

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

                    <h1>Intimation Record</h1>
                    <div class="panel-body">

                        <form action="action.php" >



                            <div class=" control-group after-add-more">
                                <div class="col-lg-10">
                                    <div class="panel ">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h3>Product</h3>
                                                <input type="text" name="addname" class="form-control" placeholder="Enter Product">
                                            </div>
                                            <div class="col-lg-5">
                                                <h3>Batch No:</h3>
                                                <input type="number" name="addmore-1" class="form-control add-value1"required="required" placeholder="Baatch No">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h3>Batch Size:</h3>
                                                <input type="text" name="addname" class="form-control" placeholder="Batch Size">
                                            </div>
                                            <div class="col-lg-5">
                                                <h3>Product Status</h3>
                                                <input type="text" name="addmore-1" class="form-control add-value1"required="required" placeholder="Status">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <br/>

                                <div class="col-lg-10">
                                    <div class="panel ">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h3>Intimation Date</h3>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <h3>Intimation Time</h3>
                                                <input type="time" name="addmore-1" class="form-control add-value1"required="required" placeholder="Enter Target">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h3>Signature of Supervisor</h3>
                                                <label>
                                                    <input type="checkbox" class="flat-red">
                                                </label>
                                            </div>
                                            <div class="col-lg-5">
                                                <h3>Verified By Q.C</h3>
                                                <label>
                                                    <input type="checkbox" class="flat-red">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <br/>

                                <div class="col-lg-10">
                                    <div class="panel ">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h3>Date Sampling</h3>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <h3>Time Of Sampling</h3>
                                                <input type="time" name="addmore-1" class="form-control add-value1"required="required" placeholder="Enter Target">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h3>Signature Of Q.C</h3>
                                                <label>
                                                    <input type="checkbox" class="flat-red" >
                                                </label>
                                            </div>
                                            <div class="col-lg-5">
                                                <h3>Verified By Supervisor</h3>
                                                <label>
                                                    <input type="checkbox" class="flat-red" >
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <br/>

                                <div class="col-lg-10">
                                    <div class="panel ">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h3>Date Of Sampling Released</h3>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <h3>Time Of Sampling Released</h3>
                                                <input type="time" name="addmore-1" class="form-control add-value1"required="required" placeholder="Enter Target">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h3>Signature of Q.C</h3>
                                                <label>
                                                    <input type="checkbox" class="flat-red">
                                                </label>
                                            </div>
                                            <div class="col-lg-5">
                                                <h3>Verified By Supervisor</h3>
                                                <label>
                                                    <input type="checkbox" class="flat-red" >
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <br/>
                            <br/>
                            <br/>
                            <br/>

                    </div>
                    </form>



                </div>


            </div>
            <!-- /.box-body -->

            <!-- /.box-footer-->
        </div>
</div>
@endsection

@section('footer-scripts')

@endsection