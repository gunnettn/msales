<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;
use App\admission;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admission = admission::all();
        return view('admission.index')->with('admissions',$admission);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admission = new Admission;
        $admission->recieveDate = $request->recieveDate;
        $admission->target = $request->target;
        $admission->save();
        return redirect()->route('admission.index');
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
        $admission = Admission::find($id);
        return view ('admission.edit')->with('value',$admission);
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
        $admission = Admission::find($id);
        $admission->recieveDate = $request->recieveDate;
        $admission->target = $request->target;
        $admission->save();
        return redirect()->route('admission.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admission =admission::find($id);
        $admission->delete();
        return redirect()->route ('admission.index');
    }

}
