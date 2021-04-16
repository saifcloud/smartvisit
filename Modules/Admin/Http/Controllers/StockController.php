<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Auth;
use DataTables;
use Carbon\Carbon;

use App\User;
use App\Product;
use App\Stock_history;


class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $page_title = 'Stocks';
        $clients = User::where('status',1)->where('is_deleted',0)->get();
        $stocks = Product::where('status',1)->where('is_deleted',0)->get();
          // $data = Stock_history::where('is_deleted',0)->orderBy('created_at','desc')->get();
          // print_r($data); die;
         if($request->ajax()){
         
         $data = Stock_history::where('is_deleted',0)->orderBy('id','desc')->get();
         return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('client',function($data){
                                $btn= $data->user->name;
                                return $btn;
                            })
                            ->addColumn('product',function($data){
                                $btn= $data->product->name;
                                return $btn;
                            })

                            ->addColumn('date',function($data){
                                $btn=  Carbon::parse($data->date)->format('d F Y');
                                return $btn;
                            })
                             ->addColumn('stock_end_date',function($data){
                                $btn=  Carbon::parse($data->stock_end_date)->format('d F Y');
                                return $btn;
                            })

                           
                             ->addColumn('amount',function($data){
                                $btn=  number_format($data->quantity * $data->buying_price,2);
                                return $btn;
                            })


                           
                             ->addColumn('total',function($data){
                                 $btn=  number_format($data->quantity * $data->selling_price,2);
                                return $btn;
                            })


                          
                             ->addColumn('profit',function($data){
                                 $sellprice =  $data->quantity * $data->selling_price;
                                 $buyprice = $data->quantity * $data->buying_price;
                                $btn=  number_format($sellprice - $buyprice,2);
                                return $btn;
                            })


                            
                             ->addColumn('actual_profit',function($data){

                                 $sellprice =  $data->quantity * $data->selling_price;
                                 $buyprice = $data->quantity * $data->buying_price;
                                 $profitAmount = $sellprice - $buyprice;
                                
                                 $profitInPercentage = $profitAmount/$buyprice*100;
                                 
                                 if($buyprice > $sellprice){
                                   $btn=  '<span class="caret_red"></span>'.number_format(abs($profitInPercentage),2);
                                 }else{
                                   $btn=  '<span class="caret_green"></span>'.number_format(abs($profitInPercentage),2);
                                 }
                                 
                               
                                return $btn;
                            })
                            // ->addColumn('action',function($data){
                            //     $btn='<a href="'.url("admin/client/show").'/'.base64_encode($data->id).'" class="mr-4 btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>';

                            //     $btn.='<a href="'.url("admin/client/edit").'/'.base64_encode($data->id).'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                            //     $btn.=  '<a href="'.url("admin/client/delete").'/'.base64_encode($data->id).'" class="mr-4 btn btn-danger" onclick="return confirm(`Are you sure you want to delete this item`)"><i class="fa fa-trash" aria-hidden="true"></i></a>';

                            //     // $btn.='<a href="'.url("admin/product/add-quantity").'/'.base64_encode($data->id).'" class="mr-4 btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                            //     // $btn.= '<a href=" url("admin/stocks/edit/'.base64_encode($data->id).'").'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                            //     // $btn.= '<a href="'.url("admin/stocks/delete/'.base64_encode($data->id).'").'" class="mr-4 btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                            //     return $btn;
                            // })
                            ->rawColumns(['client','actual_profit'])
                            ->make(true);
        }



        return view('admin::stock.index',compact('page_title','clients','stocks'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::stock.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
         // return $request->all();
        $product = Product::find($request->product_id);
        if($request->quantity > $product->quantity ){
            return response()->json(['status'=>false,'message'=>"In sufficient stock."]);
        }
        $product->quantity     = $product->quantity -$request->quantity;
        $product->total_amount =  $product->total_amount - ($product->quantity *$product->buying_price);
        $product->save();


        $stock = new Stock_history();
        $stock->client_id      = $request->client_id;
        $stock->product_id     = $request->product_id;
        $stock->quantity       = $request->quantity;
        $stock->buying_price   = $product->buying_price;
        $stock->selling_price  = $request->selling_price;
        $stock->date           = $request->date;
        $stock->stock_end_date = $request->trade_end_date;
        if($stock->save()){
            return response()->json(['status'=>true,'message'=>"Stock added successfully."]);
        }
        return response()->json(['status'=>false,'message'=>"Please try again later."]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function get_stock_item(Request $request)
    {
        $product = Product::find($request->product_id);
        return response()->json(['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::stock.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
