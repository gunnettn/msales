<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;
use App\mobile;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobile = Mobile::all();
        return view('mobile.index')->with('mobiles',$mobile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('mobile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobile = new mobile;
        $mobile->recieveDate = $request->recieveDate;
        $mobile->target = $request->target;
        $mobile->save();
        return redirect()->route('mobile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobile = mobile::find($id);
        return view ('mobile.edit')->with('value',$mobile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mobile =Mobile::find($id);
        $mobile->recieveDate = $request->recieveDate;
        $mobile->target = $request->target;
        $mobile->save();
        return redirect()->route('mobile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobile = mobile::find($id);
        $mobile ->delete();
        return redirect()->route('mobile.index');
    }
}
