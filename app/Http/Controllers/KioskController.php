<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;
use App\kiosk;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Illuminate\Http\Request;

class KioskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kiosk = kiosk::all();
        return view('kiosk.index')->with('kiosks',$kiosk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kiosk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kiosk = new kiosk;
        $kiosk->recieveDate = $request->recieveDate;
        $kiosk->target = $request->target;
        $kiosk->save();
        return redirect()->route('kiosk.index');
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
        $kiosk = kiosk::find($id);
        return view ('kiosk.edit')->with('value',$kiosk);
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
        $kiosk = kiosk::find($id);
        $kiosk->recieveDate = $request->recieveDate;
        $kiosk->target = $request->target;
        $kiosk->save();
        return redirect()->route('kiosk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kiosk = kiosk::find($id);
        $kiosk ->delete();
        return redirect()->route('kiosk.index');
    }
}
