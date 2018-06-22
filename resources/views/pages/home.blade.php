@extends('layouts.default')

@section('content_header','Dashboard')

@section('content')

<!-- Default box -->
<div class="col-md-6">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Products</h3>
        </div>
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="product_dataTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Product Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Status</th>
                                </tr>
                            </thead>
                            <tbody>               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Product Name</th><th rowspan="1" colspan="1">Status</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Ingredients</h3>
        </div>
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="ingredient_dataTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Ingredient Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Status</th>
                                </tr>
                            </thead>
                            <tbody>               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Ingredient Name</th><th rowspan="1" colspan="1">Status</th>
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
    ajax_url = "{{ URL::to('/hm_product') }}";

    $(document).ready(function(){

        $('#product_dataTable').DataTable({

            "ajax" : ajax_url,

            "processing": true,

            "serverSide": true,

            "columns": [

            { "data": "id" },

            { "data": "name" },

            { "data": "status" },

            ]

        });

        ajax_url = "{{ URL::to('/hm_ingredient') }}";

        $('#ingredient_dataTable').DataTable({

            "ajax" : ajax_url,

            "processing": true,

            "serverSide": true,

            "columns": [

            { "data": "id" },

            { "data": "name" },

            { "data": "status" },

            ]

        });

    });
</script>
@endsection