<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::all();
        return response()->json([
            'success' => true,
            'data' => $positions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $position = Position::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $position
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $position = Position::find($id);
        return response()->json([
            'success' => true,
            'data' => $position
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $position = Position::find($id);
        $position->update($request->all());
        return response()->json([
            'success' => true,
            'data' => $position
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $position = Position::destroy($id);
        $position->delete();
        return response()->json([
            'success' => true,
            'data' => $position
        ]);
    }
}
