<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industries = Industry::all();
        return view('industries.index', compact('industries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('industries.create');
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
        'company' => 'required',
        'address' => 'required',
        'leader' => 'required',
        ]);

        Industry::query()->create($request->all());

        return to_route('industries.index')->with('success', 'Berhasil');
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
        try{
            $industries = Industry::query()->findOrFail($id);
        }catch(ModelNotFoundException $e){
            return to_route('industries.index')->with('error', "The data with ID $id not found");
        }
        return view('industries.edit', compact('industries'));
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
            'company' => 'required',
            'address' => 'required',
            'leader' => 'required',
        ], [
            'company.required' => 'Nama harus diisi',
            'addres.required' => 'Nama harus diisi',
            'leader.required' => 'Nama harus diisi',
        ]);
        Industry::query()->findOrFail($id)->update($request->all());
        return to_route('industries.index')->with('success', 'Industry updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Industry::query()->findOrFail($id)->delete();
        
        return to_route('industries.index');
    }
}
