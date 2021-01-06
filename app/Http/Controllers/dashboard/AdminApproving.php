<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminApproving extends Controller
{
    public function ActivateUsers(){

        $users = User::paginate(5);
        return view('dashboard.ActiveUsersView',compact('users'));

    }
    public function ActivateUser($id){

//
        $user = User::FindORFail($id);

        if (!$user){

            session()->flash('error', __('غير موجود'));
            return redirect()->route('admin.index');
        } // end of if
        else{


                $user->update([
                    'status' => $user->setStatusActive()
                ]);

                session()->flash('success', __('تم التفعيل بنجاح'));
                return redirect()->route('admin.ActivateUsers');

            }
        }// end of else

    public function DeActivateUser($id){

//
        $user = User::FindORFail($id);

        if (!$user){

            session()->flash('error', __('غير موجود'));
            return redirect()->route('admin.index');
        } // end of if
        else{

            $user->update([
                'status' => $user->setStatusDeActive()
            ]);
            session()->flash('error', __('تم الغاء التفعيل '));
            return redirect()->route('admin.ActivateUsers');

        }
    }// end of else


}
