<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Image;
use Auth;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::where('designer_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $productCount = Product::count();
         return view('backend.product.index',['product'=>$product,'productCount'=> $productCount,]);
    }
    
        public function all_product(){
        $product = Product::orderBy('id', 'desc')->get();
        $productCount = Product::count();
         return view('backend.product.index',['product'=>$product,'productCount'=> $productCount,]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('backend.product.create',['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //
        $product = Product::create($request->all());
       
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $product);
        }
        return redirect()->route('product.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $category = Category::all();
        return view('backend.product.edit',[
            'edit' => $product, 'category'=>$category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        //
        $product->update($request->all());
       
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$product->logo);
            $this->_uploadImage($request, $product);
        }
        return redirect()->route('product.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        if(!empty($product->logo));
        @unlink('storage/'.$product->logo);
       
        $product->delete();
        return redirect()->route('product.index')->with('status','Data deleted successfully!');
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
}
