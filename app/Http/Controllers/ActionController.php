<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;
use App\action;
use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $action = action::all();
        return view('action.index')->with('actions',$action);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('action.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $action = new Action;
        $action->recieveDate = $request->recieveDate;
        $action->target = $request->target;
        $action->save();
        return redirect()->route('action.index');
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
        $action = Action::find($id);
        return view ('action.edit')->with('value',$action);
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
        $action = Action::find($id);
        $action->recieveDate = $request->recieveDate;
        $action->target = $request->target;
        $action->save();
        return redirect()->route('action.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $action =action::find($id);
        $action->delete();
        return redirect()->route ('action.index');
    }
}
