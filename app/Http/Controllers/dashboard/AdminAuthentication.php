<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class AdminAuthentication extends Controller
{

    public function AdminLogin (){

        return view('auth.Admin_login');

    }

    public function CheckAdminLogin (Request $request){


        try {
            $this->validate($request ,[

                'email' => 'required',
                'password' => 'required|min:6',
            ]);

            if (auth()->guard('admin')->attempt(['email'=>$request->email , 'password' => $request->password]))

                return redirect()->intended('admin/');


            return redirect()->back()->with($request->email);

        }
        catch (Exception $exception){

            session()->flash('error','حدث خطأ ما ');
            return redirect()->back();
        }

    }

    public function logout() {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
