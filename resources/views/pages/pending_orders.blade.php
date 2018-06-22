@extends('layouts.default')

@section('content_header','Pending Order')

@section('content')

<!-- Default box -->
<div class="col-md-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Pending Orders</h3>
        </div>
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="po_dataTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Code</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Ingredient Name</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Quantity</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Product Name</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Assigned Quantity</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Issued Quantity</th>
                                    <!-- <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Unit</th> -->
                                    <!-- <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Issued By Warehouse</th> -->
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Quality Assurance</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Verified By Production</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Status</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Action</th>
                                </tr>
                            </thead>
                            <tbody>               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">ID</th>
                                    <th rowspan="1" colspan="1">Code</th>
                                    <th rowspan="1" colspan="1">Ingredient Name</th>
                                    <th rowspan="1" colspan="1">Quantity</th>
                                    <th rowspan="1" colspan="1">Product Name</th>
                                    <th rowspan="1" colspan="1">Assigned Quantity</th>
                                    <th rowspan="1" colspan="1">Issued Quantity</th>
                                    <!-- <th rowspan="1" colspan="1">Unit</th> -->
                                    <!-- <th rowspan="1" colspan="1">Issued By Warehouse</th> -->
                                    <th rowspan="1" colspan="1">Quality Assurance</th>
                                    <th rowspan="1" colspan="1">Verified By Production</th>
                                    <th rowspan="1" colspan="1">Status</th>
                                    <th rowspan="1" colspan="1">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-scripts')
<script type="text/javascript">
    ajax_url = "{{ URL::to('/po_dt') }}";

    var table;

    $(document).ready(function(){

        table = $('#po_dataTable').DataTable({

            "ajax" : ajax_url,

            "processing": true,

            "serverSide": true,

            "columns": [

            { "data": "id" },

            { "data": "code_no" },

            { "data": "ingredient_name" },

            { "data": "quantity" },

            { "data": "product_name" },

            { "data": "assigned_quantity" },

            { "data": "issued_quantity" },

            // { "data": "unit" },

            // { "data": "issued_by_warehouse" },

            { "data": "verified_by_qa" },

            { "data": "verified_by_production" },

            { "data": "status" },

            { "data": "action" },

            ]

        });

    });

</script>
@endsection