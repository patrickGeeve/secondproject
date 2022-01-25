<?php

namespace App\Http\Controllers;

use App\Models\dinner_table;
use Illuminate\Http\Request;

class DinnerTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinner_tables = dinner_table::all();

        return view('dinner_tables.index')->with('dinner_tables', $dinner_tables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dinner_tables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'capacity' => 'required',
            'description' => 'required',
        ]);
    
        dinner_table::create($request->all());
     
        return redirect()->route('dinner_tables.index')
                        ->with('success','dinner table created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dinner_table  $dinner_table
     * @return \Illuminate\Http\Response
     */
    public function show(dinner_table $dinner_table)
    {
        return view('dinner_tables.show')->with('dinner_table', $dinner_table);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dinner_table  $dinner_table
     * @return \Illuminate\Http\Response
     */
    public function edit(dinner_table $dinner_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dinner_table  $dinner_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dinner_table $dinner_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dinner_table  $dinner_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(dinner_table $dinner_table)
    {
        //
    }
}
