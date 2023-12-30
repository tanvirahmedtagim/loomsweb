<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Logo;
use App\Models\User;
use App\Models\Prefer; 
use App\Models\About;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Visitor;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use session;
use Auth;
class FrontendController extends Controller
{
    //
    public function index(){
        $data['contact'] = Contact::first();
        $data['visitorCount'] = Visitor::count();
        $data['logo'] = Logo::first();
        $data['category'] = Category::latest()->get();
        $data['partner'] = Partner::latest()->get();
        $data['slider'] = Slider::latest()->get();
        $data['product'] = Product::with('designer')->simplePaginate(16);
 
        $data['designer'] = User::where('role','designer')->where('approve', 1)->limit(10)->get();
        return view('frontend.index', $data);
    }

    /* user login */
    public function user_register(){
        $data['contact'] = Contact::first();
         $data['visitorCount'] = Visitor::count();
        $data['logo'] = Logo::first();
        return view('frontend.user.register', $data);
    }

    public function user_login(){
        $data['contact'] = Contact::first();
        $data['visitorCount'] = Visitor::count();
        $data['logo'] = Logo::first();
        return view('frontend.user.register', $data);
    }

    public function user_login_store(Request $request){
        
     /*   $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
        ]);*/
        $email = $request->email;
        $password = $request->password;
      
        $userExists = User::where('email', $email)->exists();
        
        if ($userExists) {
            $user = User::where('email', $email)->first();
        
            if (Hash::check($password, $user->password)) {
                # code...
                $name = $user->name;
                $request->session()->put('name', $name);
                 return redirect()->route('index');
            } else {
                return redirect()->back()->with('error', 'Wrong Credentials! Please try again!');
            }
        } else {
            return redirect()->back()->with('error', 'User with that email address does not exist!');
        }

    }


    /* user login */


    /*designer login*/

    public function designer_register(){
        $data['contact'] = Contact::first();
        $data['visitorCount'] = Visitor::count();
        $data['logo'] = Logo::first();
        $data['prefer'] = Prefer::latest()->get();
        return view('frontend.designer.register', $data);
    }

    public function designer_login(){
        $data['contact'] = Contact::first();
        $data['visitorCount'] = Visitor::count();
        $data['logo'] = Logo::first();
        $data['prefer'] = Prefer::latest()->get();
        return view('frontend.designer.register', $data);
    }
    
    public function single_designer($id){
        $data['contact'] = Contact::first();
        $data['visitorCount'] = Visitor::count();
        $data['logo'] = Logo::first();
        $data['designer'] = User::where('id', $id)->first();
        return view('frontend.designer.single_designer', $data );
    }

    /* designer login */

   


    public function about(){
        $data['contact'] = Contact::first();
        $data['visitorCount'] = Visitor::count();
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        return view('frontend.about', $data);
    }
    
    public function shop(){
        $data['minPrice'] = User::where('approve', 1)->min('min_price');
$data['maxPrice'] = User::where('approve', 1)->max('max_price');
        $data['contact'] = Contact::first();
       $data['visitorCount'] = Visitor::count();
        $data['logo'] = Logo::first();
        $data['designer'] = User::where('role','designer')->where('approve', 1)->latest()->paginate(10);
        $data['category'] = Category::all();
        return view('frontend.designer.shop', $data);
    }
    
    public function contact(){
        $data['contact'] = Contact::first();
        $data['visitorCount'] = Visitor::count();
        $data['logo'] = Logo::first();
        return view('frontend.contact', $data);
    }
    
    
    public function updateProducts(Request $request)
    {
        
        $data['contact'] = Contact::first();
        $data['visitorCount'] = Visitor::count();
        $data['logo'] = Logo::first();
        
        $minPrice = $request->input('minPrice');
    
        // Fetch updated product list based on the minPrice
        // Example: Use Eloquent to query the database
        $designer = User::where('approve', 1)->where('min_price', '<=', $minPrice)->get();
       /*try {
       
        throw new \Exception('Something went wrong!');
        
        // If everything is successful, return a JSON response
        return response()->json(['success' => true, 'data' => $designer]);
    } catch (\Exception $e) {
        // If an error occurs, return a JSON error response
        return response()->json(['success' => false, 'error' => $e->getMessage()]);
    }*/
       
   return response()->json($designer);
    }
    
    public function designCategory($id){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        $data['minPrice'] = User::where('approve', 1)->min('min_price');
        $data['maxPrice'] = User::where('approve', 1)->max('max_price');
        $data['visitorCount'] = Visitor::count();
        $data['category'] = Category::all();
        $data['designer'] = Product::where('category', $id)->select('designer_id')->distinct()->get();
        
      
        //$data['category'] = Category::all();
       // dd($data['designer']);
        return view('frontend.designer.category_design', $data);
    }
    

}
