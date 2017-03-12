<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\concession;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class ConcessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concession = Concession::all();
        return view('concession.index')->with('concessions',$concession);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('concession.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $concession = new Concession;
        $concession->recieveDate = $request->recieveDate;
        $concession->target = $request->target;
        $concession->save();
        return redirect()->route('concession.index');
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
        $concession = Concession::find($id);
        return view ('concession.edit')->with('value',$concession);
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
        $concession = Concession::find($id);
        $concession->recieveDate = $request->recieveDate;
        $concession->target = $request->target;
        $concession->save();
        return redirect()->route('concession.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $concession =Concession::find($id);
        $concession->delete();
        return redirect()->route ('concession.index');
    }
}
