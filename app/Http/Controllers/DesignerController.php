<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prefer;
use Auth;
use Image;
use Illuminate\Support\Facades\Hash;
class DesignerController extends Controller
{
    //
    public function designer_info_edit(){
        $user = User::find(Auth::user()->id);
        $prefer = Prefer::all();
        return view('backend.designer.edit_profile', [
            'edit' => $user,
            'prefer' => $prefer
        ]);
    }

    public function designer_info_destroy(){
        $user = User::find(Auth::user()->id);
        $user->update($request->all());
        return view('backend.designer.edit_profile', [
            'edit' => $user,
            'prefer' => $prefer
        ]);
    }

    public function designer_info_update(Request $request){
        $user = User::find(Auth::user()->id);
       $password = Hash::make($request->password);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'mobile' => $request->mobile,
            'age' => $request->age,
            'description' => $request->description,
            'experience' => $request->experience,
            'expertise' => $request->expertise,
            'preferred_type' => $request->preferred_type,
            'max_price' => $request->max_price,
            'min_price' => $request->min_price,
              'sales_quantity' => $request->sales_quantity,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'password' => $password
        ]);
         return redirect()->back()->with('success','Profile Update Successfully!');
    }
}
