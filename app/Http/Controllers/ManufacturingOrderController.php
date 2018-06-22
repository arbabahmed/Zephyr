<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManufacturingOrder;
use App\Product;
use Auth;
use App\User;
use App\PendingOrder;
use DataTables;

class ManufacturingOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.manufacturing_order');
    }

    public function add()
    {
        return view('pages.manufacturing_order_add');
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

        // dd($request);

        $validatedData = $request->validate([

            'product_name'          =>  'required',

            'product_description'   =>  'required',

            'product_batch_size'    =>  'required',

            'product_unit'          =>  'required',

            'product_batch_no'      =>  'required'

        ]);

        $product = Product::where('name','=',$request->product_name)->get();

        if(sizeof($product) == 0) {

            $product = Product::create([

                'name'              =>      $request->product_name,

                'description'       =>      $request->product_description,

                'status'            =>      1,

            ]);

        }else {

            foreach ($product as $key => $value) {
                
                $product_temp = $value;

            }

            $product = $product_temp;
        }

        $author = Auth::user();

        $author_id = $author->id;

        $checked_by = User::where('name','=',$request->product_checked_by)->first();

        if($request->qam_status == "on") {

            $qam_status = 1;

        }else {

            $qam_status = 0;            

        }

        if($request->pm_status == "on") {

            $pm_status = 1;

        }else {

            $pm_status = 0;            

        }

        ManufacturingOrder::create([

            'product_id'            =>      $product->id, 
            
            'batch_size'            =>      $request->product_batch_size, 
            
            'unit'                  =>      $request->product_unit,

            'batch_no'              =>      $request->product_batch_no,
            
            'author_id'             =>      $author_id,
            
            'checker_id'            =>      $checked_by->id,
            
            'qam_status'            =>      $qam_status,
            
            'pm_status'             =>      $pm_status,
            
            'status'                =>      2,

        ]);

        // pending order

        $ingredients = Product::with('ingredients')->where('product_id','=',$product->id)->get();

        foreach ($ingredients as $key => $value) {
            
            $pendingOrder = new PendingOrder;

        }

        // master formula

        return redirect('home');

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

        $manufacturingOrder = ManufacturingOrder::with('products','authors')->get();

        return DataTables::of($manufacturingOrder)
        ->editColumn('qam_status',function(ManufacturingOrder $manufacturing_order){
            if($manufacturing_order->qam_status == 1)
                return "Yes";
            else
                return "No";
        })
        ->editColumn('pm_status',function(ManufacturingOrder $manufacturing_order){
            if($manufacturing_order->pm_status == 1)
                return "Yes";
            else
                return "No";
        })
        ->make(true);

    }
}
