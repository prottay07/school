<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profileView(){
        $id= Auth::user()->id;
        $user = User::find($id);
        return view('backend.user.view_profile', compact('user'));
    }

    public function editProfile(){
        $id= Auth::user()->id;
        $editData = User::find($id);
        return view('backend.user.edit_profile', compact('editData'));

    }

    public function profileStore(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        $data->gender = $request->gender;
        

        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/user_image/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_image/'), $filename);
            $data['image'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('profile.view')->with($notification);
    }

    public function viewPassword(){
        
            return view ('backend.user.view_password');
    }

    public function updatePassword(Request $request){
        $validateData = $request->validate([
            'current_password'=> 'required',
            'password'=> 'required|confirmed',
            
        ]);

        $hashedpassword = Auth::user()->password;

        if(Hash::check($request->current_password, $hashedpassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
        }else{
            return redirect()->back();
        }
    }

} //end class
