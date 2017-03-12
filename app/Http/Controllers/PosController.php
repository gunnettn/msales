<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;
use App\pos;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Illuminate\Http\Request;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pos = Pos::all();
        return view('pos.index')->with('poss',$pos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pos = new pos;
        $pos->recieveDate = $request->recieveDate;
        $pos->target = $request->target;
        $pos->save();
        return redirect()->route('pos.index');
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
        $pos = pos::find($id);
        return view ('pos.edit')->with('value',$pos);
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
        $pos = Pos::find($id);
        $pos->recieveDate = $request->recieveDate;
        $pos->target = $request->target;
        $pos->save();
        return redirect()->route('pos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pos = Pos::find($id);
        $pos->delete();
        return redirect()->route ('pos.index');
    }
}
