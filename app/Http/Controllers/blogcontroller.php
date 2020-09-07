<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use View;
use Sessions;
use Redirect;
use DB;
class blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs= DB::table ('blogs')
        ->join('users','users.id','=','blogs.Created By')
        ->select('users.*','blogs.*')
        ->get();
        return View::make('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('blog.create');
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
        $blog = new blog;
        $blog->name= $request->input('name');
        $blog->save();

        //redirect
        Session::flash('message','Successfully created blog!');
        return Redirect::to('blog');
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
        $blog = blog::find($id);

        //show the view and pass the nerd to it
        return View::make('blog.show')->with('blog',$blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = blog::find($id);

        return View::make('blog.edit')->with('blog',$blog);
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
        $blog = blog::find($id);
            $blog->name = $request->input('name');
            $blog->save();

            //redirecct
            Session::flash('message', 'Successfully updated blog!');
            return Redirect::to('blog');
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
        $blog = blog::find($id);
        $blog->delete();

        //redirect
        Session::flash('message','Successfully deleted nerd!');
        return Redirect::to('blog');
    }
}
