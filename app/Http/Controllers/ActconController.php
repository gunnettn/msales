<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\Actcon;
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
        $actcon = Actcon::all();
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
        $actcon = new Actcon;
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
        $actcon = Actcon::find($id);
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
        $actcon = Actcon::find($id);
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
        $actcon =Actcon::find($id);
        $actcon->delete();
        return redirect()->route ('actcon.index');
    }
}
