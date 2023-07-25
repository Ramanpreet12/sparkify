<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;
use Validator;

class OccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_occupations = Occupation::get();
        return view('backend.occupation.occupation_index' , compact('get_occupations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.occupation.occupation_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       Occupation::create([
        'name' => $request->name,
        'status' => $request->status,
       ]);
       return redirect()->route('occupation.index')->with('success_msg' , 'Occupation added successfully');
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
        $occupation = Occupation::where('id' , $id)->first();
        return view('backend.occupation.occupation_edit' , compact('occupation'));
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
        Occupation::where('id' , $id)
                    ->update(['name' => $request->name , 'status' => $request->status]);
        return redirect()->route('occupation.index')->with('success_msg' , 'Occupation updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Occupation::find($id)->delete();
        return redirect()->route('occupation.index')->with('success_msg' , 'Occupation deleted successfully');

    }
}
