<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;
use App\mgen;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Illuminate\Http\Request;

class MgenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mgen = Mgen::all();
        return view('mgen.index')->with('mgens',$mgen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('mgen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mgen = new mgen;
        $mgen->recieveDate = $request->recieveDate;
        $mgen->target = $request->target;
        $mgen->save();
        return redirect()->route('mgen.index');
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
        $mgen = mgen::find($id);
        return view ('mgen.edit')->with('value',$mgen);
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
        $mgen =mgen::find($id);
        $mgen->recieveDate = $request->recieveDate;
        $mgen->target = $request->target;
        $mgen->save();
        return redirect()->route('mgen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mgen = mgen::find($id);
        $mgen ->delete();
        return redirect()->route('mgen.index');
    }
}
