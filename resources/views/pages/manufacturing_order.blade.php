@extends('layouts.default')

@section('content_header','Manufacturing Order')

@section('content')

<!-- Default box -->
<div class="col-md-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Report - Manufacturing Order</h3>
            <a href="{{ route('manufacturing-order-add') }}" class="btn btn-default btn-xs flaot-right">Add</a>
        </div>
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="mo_dataTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Product Name</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Batch Size</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Unit</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Batch No</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Author</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Verified By Quality Assurance</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Verified By Project Manager</th>
                                </tr>
                            </thead>
                            <tbody>               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">ID</th>
                                    <th rowspan="1" colspan="1">Product Name</th>
                                    <th rowspan="1" colspan="1">Batch Size</th>
                                    <th rowspan="1" colspan="1">Unit</th>
                                    <th rowspan="1" colspan="1">Batch No</th>
                                    <th rowspan="1" colspan="1">Author</th>
                                    <th rowspan="1" colspan="1">Verified By Quality Assurance</th>
                                    <th rowspan="1" colspan="1">Verified By Project Manager</th>
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
    ajax_url = "{{ URL::to('/mo_dt') }}";

    $(document).ready(function(){

        $('#mo_dataTable').DataTable({

            "ajax" : ajax_url,

            "processing": true,

            "serverSide": true,

            "columns": [

            { "data": "id" },

            { "data": "products.name" },

            { "data": "batch_size" },

            { "data": "unit" },

            { "data": "batch_no" },

            { "data": "authors.name" },

            { "data": "qam_status" },

            { "data": "pm_status" },

            ] 

        });
    });
</script>
@endsection