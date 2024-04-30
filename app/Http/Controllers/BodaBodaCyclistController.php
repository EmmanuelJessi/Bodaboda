<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BodaBodaCyclist;

class BodaBodaCyclistController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $cyclists = BodaBodaCyclist::all();
        return view('boda_boda_cyclists.index', compact('cyclists'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('boda_boda_cyclists.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            // Add validation rules for other fields
        ]);

        BodaBodaCyclist::create($validatedData);
        
        return redirect()->route('boda-boda-cyclists.index')->with('success', 'Boda-Boda Cyclist registered successfully.');
    }

    // Display the specified resource.
    public function show(BodaBodaCyclist $cyclist)
    {
        return view('boda_boda_cyclists.show', compact('cyclist'));
    }

    // Show the form for editing the specified resource.
    public function edit(BodaBodaCyclist $cyclist)
    {
        return view('boda_boda_cyclists.edit', compact('cyclist'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, BodaBodaCyclist $cyclist)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            // Add validation rules for other fields
        ]);

        $cyclist->update($validatedData);

        return redirect()->route('boda-boda-cyclists.index')->with('success', 'Boda-Boda Cyclist updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(BodaBodaCyclist $cyclist)
    {
        $cyclist->delete();
        
        return redirect()->route('boda-boda-cyclists.index')->with('success', 'Boda-Boda Cyclist deleted successfully.');
    }

    // Search for record(s) using any keywords used by a user
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $cyclists = BodaBodaCyclist::where('name', 'like', "%$keyword%")
                                    ->orWhere('address', 'like', "%$keyword%")
                                    ->get();
        
        return view('boda_boda_cyclists.index', compact('cyclists'));
    }
}
