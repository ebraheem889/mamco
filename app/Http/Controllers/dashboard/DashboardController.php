<?php

namespace App\Http\Controllers\dashboard;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Sell;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;

class DashboardController extends Controller
{

    public function __constructor(){

            $this->middleware['auth:admin'];

}

    public function index(Request $request){

        $sells = Sell::WhenProductSearch($request->search)->latest()->paginate(5);

        return view('dashboard.index',compact('sells'));
    }

    public function create (){

        return view('dashboard.create');

    }
    public function edit($id){

        $sell = Sell::where('id' ,$id)->get();

        return view('dashboard.edit',compact('sell'));

    }

    public function update(Request $request , $id){

        $sell =Sell::find($id);

        if (!$sell){

            return redirect()->route('admin.index',$id)->with(['error'=>'غير موجود']);
        } // end of if
        else{


            $request->validate([
                'product_name' => 'required',
                'quantity' =>'required',
                'connection_data'=>'required',
                'classification'=>'required',
                'unit'=>'required',
                'receive_place'=>'required',
            ]);
            $sell->update($request->all());
            return redirect()->route('admin.index')->with(['success'=>'تم التعديل بنجاح']);
        }// end of else


    }

//    public function store(Request $request){
//
//        $admin = Admin::all();
//        $request->validate([
//            'company_name' =>'string',
//            'company_name_en' => 'string',
//            'product_name' => 'required',
//            'quantity' =>'required',
//            'connection_data'=>'required',
//            'classification'=>'required',
//            'unit'=>'required',
//            'receive_place'=>'required',
//        ]);
//
//        Sell::create([
//            'company_name' => $request['company_name'],
//            'company_name_en' => $request['company_name_en'],
//            'product_name' => $request['product_name'],
//            'user_id'=> $admin[0]->id,
//            'quantity' => $request['quantity'],
//            'connection_data' => $request['connection_data'],
//            'notes' => $request['notes'] == '' ? 'There Is No notes':$request['notes'],
//            'receive_place' => $request['receive_place'],
//            'classification' => $request['classification'],
//            'unit' => $request['unit'],
//        ]);
//        session()->flash('success','تم الاضافة بنجاح');
//        return redirect()->route('admin.index');
//
//
//    }
    public function destroy($id){



        $sell = Sell::find($id);
        if (!$sell){

            session()->flash('error', __('غير موجود'));
            return redirect()->route('admin.index');
        } // end of if
        else{

            $sell->delete($id);
            session()->flash('success', __('تم الحذف بنجاح'));
            return redirect()->route('admin.index');
        }// end of else


    }





}
