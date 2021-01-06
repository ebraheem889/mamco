<?php

namespace App\Http\Controllers;

use App\Sell;
use App\User;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class SellController extends Controller
{
    public function __construct()
    {

        $this->middleware(['auth']);
        $this->middleware(['ActiveUser']);
    }

    public function index(){

//        $user = User::all()->where('id' , auth()->user()->getAuthIdentifier())->toArray();
        $sells = Sell::ActiveProduct()->AuthUser()->paginate(10);
        return view('site.sells.index',compact('sells'));
    }

    public function edit(Sell $sell){

        return view('site.sells.edit',compact('sell'));

    }

    public function update(Request $request , Sell $sell){

        try {
            $request->validate([
//                'company_name' => ['required', 'string','max:100','regex:/\p{Arabic}/u'],
//                'company_name_en' => ['required', 'string', 'regex:/(^([a-zA-Z]+)(\d+)?$)/u', 'max:100'],
                'product_name' => ['required','string','max:100'],
                'quantity' =>['required','numeric','digits_between:0,2000'],
                'connection_data'=>'required|string|max:255',
                'classification'=>'required|string',
                'unit'=>'required|string',
                'receive_place'=>'string|max:255',
            ]);

            $sell->update($request->all());

            session()->flash('success','تم التعديل بنجاح');
            return redirect()->route('sell.index');

        }
        catch (Exception $exception){
            session()->flash('error','حدث خطأ ما');
            return redirect()->route('sell.index');
        }
    }

    public function store(Request $request){

        $request->validate([
//            'company_name' => ['required', 'string','max:100','regex:/\p{Arabic}/u'],
//            'company_name_en' => ['required', 'string', 'regex:/(^([a-zA-Z]+)(\d+)?$)/u', 'max:100'],
            'product_name' => ['required','string','max:100'],
            'quantity' =>['required','numeric','digits_between:0,2000'],
            'connection_data'=>'required|string|max:255',
            'classification'=>'required|string',
            'unit'=>'required|string',
            'receive_place'=>'string|max:255',
        ]);

        try {
            Sell::create([
                'company_name' => auth()->user()->company_name,
                'company_name_en' => auth()->user()->company_name_en,
                'product_name' => $request['product_name'],
                'user_id'=> auth()->user()->getAuthIdentifier(),
                'quantity' => $request['quantity'],
                'connection_data' => $request['connection_data'],
                'notes' => $request['notes'] == '' ? 'There Is No notes':$request['notes'],
                'receive_place' => $request['receive_place'],
                'classification' => $request['classification'],
                'unit' => $request['unit'],
            ]);
            session()->flash('success','تم الاضافة بنجاح');
            return redirect()->route('sell.index');
        }
        catch (\Exception $exception)
        {
            session()->flash('error','  حدث خطأ ما برجاء المحاولة لاحقا');
            return redirect()->route('sell.index');

        }


    }

    public function destroy(Sell $sell){


        $sell->update([
            'status'=> 0
        ]);

        session()->flash('error', __('تم الحذف بنجاح'));
        return redirect()->route('sell.index');

    }

}
