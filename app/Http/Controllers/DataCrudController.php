<?php

namespace App\Http\Controllers;

use App\Models\DataCrud;
use Illuminate\Http\Request;

class DataCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datacruds = DataCrud::all();
        return view('datacrud.index', compact('datacruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datacrud.create');
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
            'campo1' => 'required',
            'campo2' => 'required',
            // Agrega aquí las validaciones para otros campos
        ]);

        DataCrud::create($validatedData);

        return redirect()->route('datacrud.index')
            ->with('success', 'DataCrud created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datacrud = DataCrud::findOrFail($id);
        return view('datacrud.show', compact('datacrud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datacrud = DataCrud::findOrFail($id);
        return view('datacrud.edit', compact('datacrud'));
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
            'campo1' => 'required',
            'campo2' => 'required',
            // Agrega aquí las validaciones para otros campos
        ]);

        DataCrud::whereId($id)->update($validatedData);

        return redirect()->route('datacrud.index')
            ->with('success', 'DataCrud updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datacrud = DataCrud::findOrFail($id);
        $datacrud->delete();

        return redirect()->route('datacrud.index')
            ->with('success', 'DataCrud deleted successfully');
    }
}
