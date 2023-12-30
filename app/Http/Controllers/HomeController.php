<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prefer;
use Auth;
use Image;
class HomeController extends Controller
{
    //
    public function all_designer(){
        $user = User::where('role', 'designer')->get();
        return view('backend.designer.index', compact('user'));
    }

    public function designer_edit(){
        $user = User::find(Auth::user()->id);

        return view('backend.designer.edit', ['edit' => $user]);
    }
    public function designer_update(Request $request){
        $user = User::find(Auth::user()->id);
        $user->update($request->all());


        if ($request->hasFile('logo')) {
            @unlink('storage/'.$user->logo);
            $this->_uploadImage($request, $user);
        }

         // Sync preferred types
        if ($request->has('preferred_types')) {
            $user->preferred_types()->sync($request->input('preferred_types'));
        } else {
            // If no preferred types are selected, you may want to detach all existing associations
            $user->preferred_types()->detach();
        }

        return redirect()->back()->with('success','Data inserted successfully');
    }

    public function approve_designer($id){
      //  dd('designer');
        $user = User::find($id);
        $user->approve = 1;
        $user->save();
         return redirect()->back()->with('success', 'User has been approved!');
    }

    public function disapprove_designer($id){
        $user = User::find($id);
        $user->approve = 0;
        $user->save();
         return redirect()->back()->with('success', 'User has been disapproved!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(390, 508)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }

    }


    //designer

    public function designer_admin_edit($id){
       $user = User::find($id);
        $prefer = Prefer::all();

        return view('backend.admin.designer_edit', ['edit' => $user, 'prefer' => $prefer]);
    }

    public function designer_admin_update(Request $request, $id){
        $user = User::find($id);

        $user->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$user->logo);
            $this->_uploadImage($request, $user);
        }

        return redirect()->back()->with('success', 'Profile Update successfully!');
    }



}
