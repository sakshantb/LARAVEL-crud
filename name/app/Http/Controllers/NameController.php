<?php

namespace App\Http\Controllers;

use App\Models\name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $names = DB::table('names')->get();
        return view('home',['names'=>$names]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('names')->insert([
            'name'=> $request->name,
        ]);
        return redirect(route('index'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\name  $name
     * @return \Illuminate\Http\Response
     */
    public function show(name $name)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\name  $name
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $name = name::find($id);
       return view('edit',['name'=>$name]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\name  $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      DB::table('names')->where('id',$id )->update(
          ['name'=> $request->name,]
      );
      return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\name  $name
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('names')->where('id',$id)->delete();
        return redirect(route('index'));
    }
}
