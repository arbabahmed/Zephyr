<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use DB;
use App\PendingOrder;
use App\Ingredient;

class PendingOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.pending_orders');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function datatable() {
        $pendingOrder = Ingredient::with('pending_orders')
            ->join('pending_orders',function($join){
                $join->on('pending_orders.ingredient_id','=','ingredients.id');
            })
            ->join('manufacturing_orders',function($join){
                $join->on('manufacturing_orders.id','=','pending_orders.manufacture_order_id');
            })->join('products',function($join){
                $join->on('manufacturing_orders.product_id','=','products.id');
            })->select('pending_orders.*','ingredients.name as ingredient_name','products.name as product_name')
            ->get();

        return DataTables::of($pendingOrder)
        ->addColumn('action', function ($po) {
            return '<a href="javascript:;" class="btn btn-xs btn-success" onclick="edit_po('.$po->id.', \'approved\');"><i class="glyphicon glyphicon-ok"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-primary" onclick="edit_po('.$po->id.', \'rejected\');"><i class="glyphicon glyphicon-remove"></i></a>';
        })
        ->editColumn('status',function(Ingredient $pending_order){
            if($pending_order->status == '0')
                return '<span class="badge bg-red">Rejected</span>';

            if($pending_order->status == '1')
                return '<span class="badge bg-light-blue">Quarantine</span>';

            if($pending_order->status == '2')
                return '<span class="badge bg-green">Approved</span>';
        })
        ->editColumn('assigned_quantity',function(Ingredient $pending_order){
            return $pending_order->assigned_quantity . ' ' . $pending_order->unit;
        })
        ->editColumn('issued_quantity',function(Ingredient $pending_order){
            return $pending_order->issued_quantity . ' ' . $pending_order->unit;
        })
        ->editColumn('verified_by_qa',function(Ingredient $pending_order){
            if($pending_order->verified_by_qa == 1)
                return "Yes";
            else
                return "No";
        })
        ->editColumn('verified_by_production',function(Ingredient $pending_order){
            if($pending_order->verified_by_production == 1)
                return "Yes";
            else
                return "No";
        })
        ->rawColumns(['action','status'])
        ->make(true);


    }

    public function statusUpdate(Request $request){

        $pending_order = PendingOrder::find($request->id);

        if($request->action == "approved") {

            $pending_order->status = 2;    

        }else {

            $pending_order->status = 0;

        }

        $pending_order->save();

    }
}
