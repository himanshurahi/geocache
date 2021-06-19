<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Geocache;
use Illuminate\Http\Request;

class GeocacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geocache = Geocache::all();
      return view('geocache.index', compact('geocache'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('geocache.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $geocache = new Geocache();
        $geocache->name = $request->name;
        $geocache->description = $request->description;
        $geocache->save();
        return redirect('/geocache');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $geocache = Geocache::find($id)->first();
       return view('geocache.view', compact('geocache'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $geocache = Geocache::find($id)->first();
        return view('geocache.edit', compact("geocache"));
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
        
        $geocache = Geocache::find($id)->first();
        $geocache->name = $request->name;
        $geocache->description = $request->description;
        $geocache->save();
        return redirect('/geocache');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Geocache::find($id)->delete();
       return redirect('/geocache');
    }
}
