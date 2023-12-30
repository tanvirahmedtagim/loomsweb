<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Image;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
            'mobile' => 'numeric',
           // 'logo' => 'mimes:jpg,png,svg,jpeg,webp',
            'age' => 'numeric',
            'max_price' => 'numeric',
            'min_price' => 'numeric'
        ]);
      
            

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'gender' => $request->gender,
            'mobile' => $request->mobile,
            'description' => $request->description,
            'age' => $request->age,
            'experience' => $request->experience,
            'expertise' => $request->expertise,
            'preferred_type' => $request->preferred_type,
            'max_price' => $request->max_price,
            'min_price' => $request->min_price
        ]);
        if ($request->hasFile('logo')) {
            dd('file');
            $this->_uploadImage($request, $logo);
        }
        if ($user->role === 'user') {
            # code...
            return redirect()->route('user_register')->with('success','Registration successfully! Please log in.'); 
        }
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    private function _uploadImage($request, $user)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(320, 268)->save('storage/' . $filename);
            $user->logo = $filename;
            $user->save();
        }
       
    }
}
