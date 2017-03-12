<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;
use App\side;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

use Illuminate\Http\Request;

class SideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sides = side::all();
        return view('side.index')->with('sides',$sides);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('side.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $side = new Side;
        $side->recieveDate = $request->recieveDate;
        $side->target = $request->target;
        $side->save();
        return redirect()->route('side.index');
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
        $side =side::find($id);
        return view('side.edit')->with('value',$side);
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
        $side = Side::find($id);
        $side->recieveDate = $request->recieveDate;
        $side->target = $request->target;
        $side->save();
        return redirect()->route('side.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $side = Side::find($id);
        $side->delete();
        return redirect()->route ('side.index');
    }
}
