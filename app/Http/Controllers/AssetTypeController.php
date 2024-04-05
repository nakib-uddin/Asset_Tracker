<?php

namespace App\Http\Controllers;

use App\Models\AssetType;
use Illuminate\Http\Request;

class AssetTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assetTypes = AssetType::all();
        return view('asset_types.index', compact('assetTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assettype.create');
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
            'name' => 'required|unique:asset_types|max:255',
        ]);

        AssetType::create([
            'name' => $request->name,
        ]);

        return view('asset_types.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssetType  $assetType
     * @return \Illuminate\Http\Response
     */
    public function edit(AssetType $assetType)
    {
        return view('asset_types.edit', compact('assetType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssetType  $assetType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssetType $assetType)
    {
        $request->validate([
            'name' => 'required|unique:asset_types,name,'.$assetType->id.'|max:255',
        ]);

        $assetType->update([
            'name' => $request->name,
        ]);

        return redirect()->route('asset_types.index')->with('success', 'Asset type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetType  $assetType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssetType $assetType)
    {
        $assetType->delete();
        return redirect()->route('asset_types.index')->with('success', 'Asset type deleted successfully.');
    }
}
