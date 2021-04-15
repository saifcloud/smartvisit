<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use DataTables;
use Carbon\Carbon;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $page_title = 'Products';

        if($request->ajax()){
         
         $data = Product::where('is_deleted',0)->get();
         return Datatables::of($data)
                            ->addIndexColumn()
                             ->addColumn('average_price',function($data){
                                $btn=  number_format($data->total_amount/$data->quantity,2); 
                                return $btn;
                            })
                            // ->addColumn('buying_price',function($data){
                            //     $btn=  number_format($data->buying_price,2); 
                            //     return $btn;
                            // })
                            ->addColumn('total',function($data){
                                $btn=  number_format($data->total_amount,2); 
                                return $btn;
                            })
                             ->addColumn('date',function($data){
                                $btn=  Carbon::parse($data->created_at)->format('d F Y');
                                return $btn;
                            })
                            ->addColumn('action',function($data){
                                $btn='<a href="'.url("admin/product/show").'/'.base64_encode($data->id).'" class="mr-4 btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>';

                                $btn.='<a href="'.url("admin/product/edit").'/'.base64_encode($data->id).'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                                $btn.=  '<a href="'.url("admin/product/delete").'/'.base64_encode($data->id).'" class="mr-4 btn btn-danger" onclick="return confirm(`Are you sure you want to delete this item`)"><i class="fa fa-trash" aria-hidden="true"></i></a>';

                                $btn.='<a href="javascript:void(0)" class="mr-4 btn btn-warning" id="st-add-quantity" data-pid="'.base64_encode($data->id).'"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                                // $btn.= '<a href=" url("admin/stocks/edit/'.base64_encode($data->id).'").'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                                // $btn.= '<a href="'.url("admin/stocks/delete/'.base64_encode($data->id).'").'" class="mr-4 btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                                return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
        }


        return view('admin::product.index',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = 'Product create';
        return view('admin::product.create',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $request->validate([
         'name'=>'required',
         'quantity'=>'required',
         'buying_price'=>'required',
        
        ]);
        
        $checkExist = Product::where('name',$request->name)
                                ->where('status',1)
                                ->where('is_deleted',0)
                                ->first();

        if(!empty($checkExist)) return redirect()->back()->with('failed','Item name is already exist.')->withInput();

        $product = new Product();
        $product->name          = $request->name;
        $product->quantity      = $request->quantity;
        $product->buying_price  = $request->buying_price;
        $product->total_amount  = $request->quantity * $request->buying_price;
      
        if($product->save()){
            return redirect('admin/product')->with('success','Product added successfully.');
        }
        return redirect()->back()->with('failed','Product cannot add.');
       

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $page_title = 'Product details';
        $product = Product::find(base64_decode($id));
        return view('admin::product.show',compact('page_title','product'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $page_title = 'Product edit';
        $product = Product::find(base64_decode($id));
        return view('admin::product.edit',compact('page_title','product'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        //
          $request->validate([
           'name'=>'required',
          ]);
        
        $checkExist = Product::where('name',$request->name)
                                ->where('id','!=',base64_decode($request->pid))
                                ->where('status',1)
                                ->where('is_deleted',0)
                                ->first();

        if(!empty($checkExist)) return redirect()->back()->with('failed','Item name is already exist.')->withInput();

        $product = Product::find(base64_decode($request->pid));
        $product->name          = $request->name;
        // $product->quantity      = $request->quantity;
        // $product->buying_price  = $request->buying_price;
      
        if($product->save()){
            return redirect('admin/product')->with('success','Product added successfully.');
        }
        return redirect()->back()->with('failed','Product cannot add.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        $product =  Product::find(base64_decode($id));
        $product->is_deleted = 1;
        $product->save();
        return redirect()->back()->with('failed','Stock deleted successfully.');


    }


    public function product_quantity(Request $request){
      $product =  Product::find(base64_decode($request->product_id));
      $product->quantity     = $product->quantity+$request->quantity;
      $product->buying_price = $request->buying_price;
      $product->total_amount = ($product->total_amount + ($request->quantity *$request->buying_price));
      if($product->save()){
        return response()->json(['status'=>true]);
      }
      return response()->json(['status'=>false]);


    }
}
