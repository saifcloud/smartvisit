<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Auth;
use Hash;
use DataTables;
use Carbon\Carbon;
use App\Admin;
use App\User;
use App\Clinical_update;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        // echo Carbon::now()->toDateString(); die;
        $page_title ='Dashboard';

      
       

        // print_r($todaySale); die;
        return view('admin::dashboard',compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {  
        $page_title ="Profile";
        $admin = Admin::find(Auth::guard('admin')->id());
        
        return view('admin::profile',compact('admin','page_title'));
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
          'email'=>'required'
        ]);

        $admin = Admin::find(Auth::guard('admin')->id());
        $admin->name  = $request->name;
        $admin->email = $request->email;
        $admin->save();

        return redirect('admin/dashboard');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function change_password()
    {
        $page_title = "Change password";
        return view('admin::change-password',compact('page_title'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function store_change_password(Request $request)
    {
        $request->validate([
           'new_password'=>'required|min:6',
           'confrim_password'=>'required|min:6|same:new_password'
        ]);
        $admin = Admin::find(Auth::guard('admin')->id());
        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return redirect()->back()->with('success','Password has been changed successfully.');
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
    public function destroy()
    {
        //
        Auth::guard('admin')->logout();

        return redirect('admin');
    }




    public function clinical_update(Request $request)
    {
        //
        $page_title = "Clinical updates";

        if($request->ajax()){
         
         $data = Clinical_update::where('is_deleted',0)->orderby('id','desc')->get();
         return Datatables::of($data)
                            ->addIndexColumn()
                            //  ->addColumn('average_price',function($data){
                            //      $btn=  number_format($data->current_price,2); 
                            //     // $btn=  number_format($data->total_amount/$data->quantity,2); 
                            //     return $btn;
                            // })
                            ->addColumn('image',function($data){
                                $btn= "<img src=".url('/').$data->image." height='60px' width='60px'/>"; 
                                return $btn;
                            })
                            ->addColumn('description',function($data){
                                $btn= \Str::limit( $data->description, 50, ' ...');
                                return $btn;
                            })
                             ->addColumn('date',function($data){
                                $btn=  Carbon::parse($data->created_at)->format('d F Y');
                                return $btn;
                            })
                            ->addColumn('action',function($data){
                                // $btn='<a href="'.url("admin/doctor/show").'/'.base64_encode($data->id).'" class="mr-4 btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>';

                                $btn='<a href="'.url("admin/clinical-edit").'/'.base64_encode($data->id).'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';

                                $btn.=  '<a href="'.url("admin/clinical-delete").'/'.base64_encode($data->id).'" class="mr-4 btn btn-danger" onclick="return confirm(`Are you sure you want to delete this item`)"><i class="fa fa-trash" aria-hidden="true"></i></a>';

                                // $btn.='<a href="javascript:void(0)" class="mr-4 btn btn-warning" id="st-add-quantity" data-pid="'.base64_encode($data->id).'"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                                // $btn.= '<a href=" url("admin/stocks/edit/'.base64_encode($data->id).'").'" class="mr-4 btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                                // $btn.= '<a href="'.url("admin/stocks/delete/'.base64_encode($data->id).'").'" class="mr-4 btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                                return $btn;
                            })
                            ->rawColumns(['action','image','description'])
                            ->make(true);
        }
        return view('admin::clinical_update.index',compact('page_title'));
    }


    public function clinical_create(Request $request)
    {
        //
        $page_title ="Create updates";
        return view('admin::clinical_update.create',compact('page_title'));
    }



    public function clinical_store(Request $request)
    {
        //
         $request->validate([
         'title'=>'required',
         'description'=>'required'
         ]);


         $clinicupdate = new Clinical_update;
         if(!empty($request->image)){
         $file = $request->image;
         $filename = time().'.'.$file->getClientOriginalExtension();
         $file->move('public/doctor/images/overview',$filename);
         $clinicupdate->image = '/public/doctor/images/overview/'.$filename; 
         }
         $clinicupdate->title = $request->title;
         $clinicupdate->description = $request->description;
         $clinicupdate->save();
         return redirect('admin/clinical-update')->with('success','Clinical update added successfully.');
    }




    public function clinical_edit($id)
    {
        //
        $page_title ="Edit Updates";
        $clinicupdate = Clinical_update::find(base64_decode($id));
        return view('admin::clinical_update.edit',compact('page_title','clinicupdate'));
    }



    public function clinical_update_post(Request $request)
    {
        //
         $request->validate([
         'title'=>'required',
         'description'=>'required'
         ]);


         $clinicupdate = Clinical_update::find(base64_decode($request->update_id));
         if(!empty($request->image)){
         $file = $request->image;
         $filename = time().'.'.$file->getClientOriginalExtension();
         $file->move('public/doctor/images/overview',$filename);
         $clinicupdate->image = '/public/doctor/images/overview/'.$filename; 
         }
         $clinicupdate->title = $request->title;
         $clinicupdate->description = $request->description;
         $clinicupdate->save();
         return redirect('admin/clinical-update')->with('success','Clinical update updated successfully.');

    }


    public function clinical_delete($id)
    {
        //
        $clinical_update = Clinical_update::find(base64_decode($id));
        $clinical_update->is_deleted = 1;
        $clinical_update->save();

        return back()->with('success','Update deleted successfully.');
    }
}
