<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $validatedSparepart = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required'
        ]);
        $sparepart = Sparepart::create($validatedSparepart);
        return redirect('/home/sparepart')->with('success', 'Sparepart saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function show(Sparepart $sparepart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function edit(Sparepart $sparepart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sparepart $sparepart)
    {
        //
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required'
        ]);
        $sparepart = Sparepart::find($sparepart->id);
        $sparepart->name = $request->get('name');
        $sparepart->category = $request->get('category');
        $sparepart->price = $request->get('price');
        $sparepart->save();
        return redirect('/home/sparepart')->with('success', 'Sparepart updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sparepart $sparepart)
    {
        //
        $sparepart->delete();
        return redirect('/home/sparepart')->with('success', 'Sparepart deleted!');
    }
}