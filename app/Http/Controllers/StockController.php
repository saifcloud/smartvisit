<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use DataTables;
use Auth;
use Carbon\Carbon;


use App\Stock;
use App\Stock_history;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
         $page_title = 'Stocks';

         if($request->ajax()){
         
         $data = Stock_history::where('client_id',Auth::id())
                                 ->where('is_deleted',0)
                                 ->orderBy('id','desc')
                                 ->get();
         return Datatables::of($data)
                            ->addIndexColumn()
                           
                            ->addColumn('item',function($data){
                                $btn= $data->product->name;
                                return $btn;
                            })
                              ->addColumn('total',function($data){
                                $btn= number_format($data->quantity * $data->selling_price,2);
                                return $btn;
                            })

                            ->addColumn('date',function($data){
                                $btn=  Carbon::parse($data->date)->format('d F Y');
                                return $btn;
                            })
                            ->rawColumns([])
                            ->make(true);
        }



        return view('stock.index',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "Stocks";
        return  view('stock.create',compact('page_title'));
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
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
         return  view('stock.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
         return  view('stock.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
