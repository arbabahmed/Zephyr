@extends('layouts.default')

@section('content_header','Production Target')

@section('content')

<!-- Default box -->
<div class="col-md-12">
    <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Production Target</h3>

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
                    <h1>Production Target</h1>
                    <div class="panel-body">

                        <form action="action.php" id="production">


                            <div class=" control-group after-add-more">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <h3>Name Of The Products</h3>
                                        <input type="text" name="addmore-1" class="form-control" placeholder="Enter Name Here">
                                    </div>
                                    <div class="col-lg-4">
                                        <h3>Product Target</h3>
                                        <input type="number" name="aaa-1" class="form-control add-value1"required="required" placeholder="Enter Target">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <br/>


                    </form>
                    <br/>
                    <br/>
                        <div class="row">
                            <div  class=" control-group mt-4">
                                <div class="col-lg-4">
                                    <button class="btn btn-primary sum mt-1 " type="button"><i class="glyphicon glyphicon-plus"></i> Sum</button>
                                </div>
                                <div class="col-lg-4">
                                    <input readonly type="number" name="addnum" class="form-control add-value pt-1" placeholder="Total">
                                </div>
                            </div>
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