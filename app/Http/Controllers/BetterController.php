<?php

namespace App\Http\Controllers;

use App\Models\Better;
use Illuminate\Http\Request;

class BetterController extends Controller
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
    public function index(Request $request)
    {
        

        if (isset($request->horse_id) && $request->horse_id !== 0)
        $betters = \App\Models\Better::where('horse_id', $request->horse_id)->orderBy('bet', 'DESC')->get();
        else
        $betters = \App\Models\Better::orderBy('bet', 'DESC')->get();

        $horses = \App\Models\Horse::orderBy('name')->get();
        return view('betters.index', ['betters' => $betters, 'horses' => $horses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horses = \App\Models\Horse::orderBy('name')->get();
        return view('betters.create', ['horses' => $horses]);
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
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'bet' => 'required|gt:0',
            'horse_id' => 'required'
        ]);
        $better = new Better();
        $better->fill($request->all());
   
    return ($better->save() !== 1) ?
    redirect()->route('betters.index')->with('status_success', "Better added!") :
    redirect()->route('betters.index')->with('status_error', "Better was not added!");
   
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function show(Better $better)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function edit(Better $better)
    {
        $horses = \App\Models\Horse::orderBy('name')->get();
        return view('betters.edit', ['better' => $better, 'horses' => $horses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Better $better)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'bet' => 'required|gt:0',
            
        ]);
        $better->fill($request->all());
        return ($better->save() !== 1) ?
            redirect()->route('betters.index')->with('status_success', "Better updated!") :
            redirect()->route('betters.index')->with('status_error', "Better was not updated!");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function destroy(Better $better)
    {
        $better->delete();
        return redirect()->route('betters.index');
    }
}
