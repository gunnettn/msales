<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;
use App\atp;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

use Illuminate\Http\Request;

class AtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atp = atp::all();
        return view('atp.index')->with('atps',$atp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('atp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atp = new Atp;
        $atp->recieveDate = $request->recieveDate;
        $atp->target = $request->target;
        $atp->save();
        return redirect()->route('atp.index');
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
        $atp = Atp::find($id);
        return view ('atp.edit')->with('value',$atp);
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
        $atp = Atp::find($id);
        $atp->recieveDate = $request->recieveDate;
        $atp->target = $request->target;
        $atp->save();
        return redirect()->route('atp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atp =Atp::find($id);
        $atp->delete();
        return redirect()->route ('atp.index');
    }
}
