<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;
use App\admcon;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Illuminate\Http\Request;

class AdmconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admcon = admcon::all();
        return view('admcon.index')->with('admcons',$admcon);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admcon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admcon = new Admcon;
        $admcon->recieveDate = $request->recieveDate;
        $admcon->target = $request->target;
        $admcon->save();
        return redirect()->route('admcon.index');
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
        $admcon = Admcon::find($id);
        return view ('admcon.edit')->with('value',$admcon);
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
        $admcon = Admcon::find($id);
        $admcon->recieveDate = $request->recieveDate;
        $admcon->target = $request->target;
        $admcon->save();
        return redirect()->route('admcon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admcon =admcon::find($id);
        $admcon->delete();
        return redirect()->route ('admcon.index');
    }
}
