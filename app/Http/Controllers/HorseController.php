<?php

namespace App\Http\Controllers;

use App\Models\Horse;
use Illuminate\Http\Request;

class HorseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('horses.index', ['horses' => Horse::orderBy('name')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horses = \App\Models\Horse::orderBy('name')->get();
        return view('horses.create', ['horses' => $horses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:horses|max:100',
            'runs' => 'required|gte:0',
            'wins' => 'required|gte:0|lte:runs',
            'about' => 'required'
        ]);

        $horse = new Horse();
        $horse->fill($request->all());

        return ($horse->save() !== 1) ?
            redirect()->route('horses.index')->with('status_success', "Horse added!") :
            redirect()->route('horses.index')->with('status_error', "Horse was not added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function show(Horse $horse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function edit(Horse $horse)
    {
        // $better = \App\Models\Better::orderBy('name')->get();
        return view('horses.edit', ['horse' => $horse]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horse $horse)
    {
        $this->validate($request, [
            'name' => 'required|unique:horses,name,' . $horse->id . ',id|max:100',
            'runs' => 'required|gte:0',
            'wins' => 'required|gte:0|lte:runs',
            'about' => 'required'
        ]);
        $horse->fill($request->all());

        return ($horse->save() !== 1) ?
            redirect()->route('horses.index')->with('status_success', "Horse {$request->name} Updated!") :
            redirect()->route('horses.create')->with('status_error', "Horse was not updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horse $horse)
    {
        $horse->delete();
        return redirect()->route('horses.index');
    }
}
