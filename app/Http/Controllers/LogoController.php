<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use App\Http\Requests\LogoRequest;
use Image;
class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logo = Logo::orderBy('id', 'desc')->first();
        $logoCount = Logo::count();
         return view('backend.logo.index',['logo'=>$logo,'logoCount'=> $logoCount,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.logo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogoRequest $request)
    {
        //
        $logo = Logo::create($request->all());
       
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $logo);
        }
        return redirect()->route('logo.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        //
        return view('backend.logo.edit',[
            'edit' => $logo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(LogoRequest $request, Logo $logo)
    {
        //
        $logo->update($request->all());
       
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$logo->logo);
            $this->_uploadImage($request, $logo);
        }
        return redirect()->route('logo.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        //
        if(!empty($logo->logo));
        @unlink('storage/'.$logo->logo);
       
        $logo->delete();
        return redirect()->route('logo.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(384, 160)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }
}
