<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\actcon;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class ActconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actcon = actcon::all();
        return view('actcon.index')->with('actcons',$actcon);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('actcon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actcon = new actcon;
        $actcon->recieveDate = $request->recieveDate;
        $actcon->target = $request->target;
        $actcon->save();
        return redirect()->route('actcon.index');
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
        $actcon = actcon::find($id);
        return view ('actcon.edit')->with('value',$actcon);
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
        $actcon = actcon::find($id);
        $actcon->recieveDate = $request->recieveDate;
        $actcon->target = $request->target;
        $actcon->save();
        return redirect()->route('actcon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actcon =actcon::find($id);
        $actcon->delete();
        return redirect()->route ('actcon.index');
    }
}
