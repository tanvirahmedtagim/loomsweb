<?php

namespace App\Http\Controllers;

use App\Models\Prefer;
use Illuminate\Http\Request;
use App\Http\Requests\PreferRequest;
use auth;
class PreferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prefer = Prefer::orderBy('id', 'desc')->get();
        $preferCount = Prefer::count();
         return view('backend.prefer.index',['prefer'=>$prefer,'preferCount'=> $preferCount,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.prefer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreferRequest $request)
    {
        //
        $prefer = Prefer::create($request->all());


        return redirect()->route('prefer.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prefer  $prefer
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prefer  $prefer
     * @return \Illuminate\Http\Response
     */
    public function edit(Prefer $prefer)
    {
        //
        return view('backend.prefer.edit',[
            'edit' => $prefer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prefer  $prefer
     * @return \Illuminate\Http\Response
     */
    public function update(PreferRequest $request, Prefer $prefer)
    {
        //
        $prefer->update($request->all());

        return redirect()->route('prefer.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prefer  $prefer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prefer $prefer)
    {
        //
        $prefer->delete();
        return redirect()->route('prefer.index')->with('status','Data deleted successfully!');
    }
}
