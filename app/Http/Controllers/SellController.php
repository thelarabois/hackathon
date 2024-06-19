<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\UsedOil;

use Illuminate\Http\Request;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $usedOils = UsedOil::with('seller')->where('seller_id', $id)->get();
        // dd($usedOils);
        return view('sell.index', compact('usedOils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function post(Request $request)
    {
        $request->merge(['seller_id' => Auth::user()->id]);
        $request->validate([
            'quantity' => 'required|numeric',
            'seller_id' => 'required|numeric|exists:users,id',
            'price' => 'nullable|numeric',
            'quality' => 'nullable|string',
        ]);

        $student = UsedOil::create([
            'quantity' => $request->quantity,
            'seller_id' => $request->seller_id,
            'price' => $request->price,
            'quality' => $request->quality,
            'status' => 'Pending',
        ]);

        // wala pay view para sa sales sa used oil!
        // cannot direct it
        return redirect()->route('sell.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
