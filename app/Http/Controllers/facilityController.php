<?php

namespace App\Http\Controllers;

use App\Models\facility;
use Illuminate\Http\Request;

class facilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = facility::all();
        return view('facilities.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facilities.create');
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
            'name' => 'required',
            'qty' => 'required|numeric',
            'info' => 'nullable'
            
        ]);
        
        facility::query()->create($request->all());
        
        return to_route('facilities.index');
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
        $facilities = facility::query()->findOrFail($id);
        
        return view('facilities.edit',compact('facilities'));
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
        $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'info' => 'nullable'
        ],[
            'name.required' => 'kolom harus diisi',
            'qty.required' => 'kolom harus diisi',
        ]);
        
        facility::query()->findOrFail($id)->update($request->all());
        
        return to_route('facilities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        facility::query()->findOrFail($id)->delete();
        
        return to_route('facilities.index');
    }
}
