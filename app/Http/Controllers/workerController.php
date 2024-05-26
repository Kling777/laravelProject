<?php

namespace App\Http\Controllers;

use App\Models\worker;
use Illuminate\Http\Request;

class workerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = worker::all();
        return view('workers.index',compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workers.create');
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
            'umur' => 'required',
            'nik' => 'required',
        ]);
        
        worker::query()->create($request->all());
        
        return to_route('workers.index');
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
        $workers = worker::query()->findOrFail($id);
        
        return view('workers.edit',compact('workers'));
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
            'umur' => 'required',
            'nik' => 'required',
        ],[
            'name.required' => 'kolom harus diisi',
            'umur.required' => 'kolom harus diisi',
            'nik.required' => 'kolom harus diisi',
        ]);
        
        worker::query()->findOrFail($id)->update($request->all());
        
        return to_route('workers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        worker::query()->findOrFail($id)->delete();
        
        return to_route('workers.index');
    }
}
