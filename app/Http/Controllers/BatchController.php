<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batches;
use View;
use Session;
use Redirect;
class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $batch=Batches::all();
        return View::make('batch.index')->with('batch',$batch);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('batch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $batch = new Batches;
            $batch->name= $request->input('name');
            $batch->save();

            //redirect
            Session::flash('message','Successfully created batch!');
            return Redirect::to('batch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get the nerd
        $batch = Batches::find($id);

        //show the view and pass the nerd to it
        return View::make('batch.show')->with('batch',$batch);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get the batch
        $batch = Batches::find($id);

        //show the eedid forn and pass the nerd
        return View::make('batch.edit')->with('batch',$batch);
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
        //
        $batch = Batches::find($id);
            $batch->name = $request->input('name');
            $batch->save();

            //redirecct
            Session::flash('message', 'Successfully updated batch!');
            return Redirect::to('batch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $batch = Batches::find($id);
        $batch->delete();

        //redirect
        Session::flash('message','Successfully deleted nerd!');
        return Redirect::to('batch');
    }
}
