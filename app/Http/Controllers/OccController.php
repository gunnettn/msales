<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;
use App\occ;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Illuminate\Http\Request;


class OccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occ = Occ::all();
        return view('occ.index')->with('occs',$occ);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('occ.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $occ = new occ;
        $occ->recieveDate = $request->recieveDate;
        $occ->target = $request->target;
        $occ->save();
        return redirect()->route('occ.index');
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
        $occ = occ::find($id);
        return view ('occ.edit')->with('value',$occ);
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
        $occ = Occ::find($id);
        $occ->recieveDate = $request->recieveDate;
        $occ->target = $request->target;
        $occ->save();
        return redirect()->route('occ.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $occ = Occ::find($id);
        $occ->delete();
        return redirect()->route ('occ.index');
    }
}
