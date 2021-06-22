<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Geocache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
        ]);
        
        $name = time().'.'.$request->file('image')->getClientOriginalExtension();
        $geocache = new Geocache();
        $geocache->name = $request->name;
        $geocache->description = $request->description;
        $geocache->image = $name;
        $geocache->created_by = Auth::user()->id;
        $request->image->move(public_path('images'), $name);
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
       $geocache = Geocache::findorfail($id);
      
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
        $geocache = Geocache::find($id);
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
        
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
        ]);
        $geocache = Geocache::find($id);
        unlink(public_path('images/'.$geocache->image));
        
        $name = time().'.'.$request->file('image')->getClientOriginalExtension();
        
       
        
        $geocache->name = $request->name;
        $geocache->description = $request->description;
        $request->image->move(public_path('images'), $name);
        $geocache->image = $name;
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
       $geocache = Geocache::find($id);
        unlink(public_path('images/'.$geocache->image));
        $geocache->delete();
       return redirect('/geocache');
    }
}
