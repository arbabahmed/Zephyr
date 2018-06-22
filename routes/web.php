<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::match(['get','post'],'/pusher-example',function(Request $request){
	return view('pusher');
});

Route::get('test', function () {
    event(new App\Events\ManufactureOrderPlaced('Someone'));
    return "Event has been sent!";
});
Route::get('/home', 'HomeController@index')->name('home');

# Resource
Route::resource('manufacturing-order', 'ManufacturingOrderController');
Route::resource('pending-order', 'PendingOrderController');
Route::resource('production-target', 'ProductionTargetController');
Route::resource('essential-item', 'EssentialItemController');
Route::resource('packaging-material', 'PackagingMaterialController');
Route::resource('intimation-record', 'IntimationReportController');
Route::resource('purchase-order', 'PurchaseOrderController');
Route::resource('manufacturing-record', 'ManufacturingRecordController');
# Extra CRUD operations
Route::match(['get','post'],'/manufacturing-order-add', 'ManufacturingOrderController@add')->name('manufacturing-order-add');

# datatable
Route::match(['get','post'],'mo_dt','ManufacturingOrderController@datatable');
Route::match(['get','post'],'po_dt','PendingOrderController@datatable');
Route::match(['get','post'],'po_status_update','PendingOrderController@statusUpdate');
Route::match(['get','post'],'hm_product','ProductController@datatable');
Route::match(['get','post'],'hm_ingredient','IngredientController@datatable');
