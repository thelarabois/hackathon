<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\UsedOil;
use App\Models\PurifiedOil;
use Illuminate\Support\Facades\Validator;
use Exception;
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

    public function adminSell(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'quality' => ['required', 'string', 'max:255'],
                'quantity' => ['required', 'string', 'max:255'],
            ]);

            if($validator->fails()) {
                return redirect()->back()->with('error', 'Invalid input');
            }

            $quantity = (float)$request->quantity;
            $price = 0;

            if($request->quality == 'unknown'){
                $price = $quantity * 15;
            }
            elseif($request->quality == 'class_A'){
                $price = $quantity * 20;
            }
            elseif($request->quality == 'class_B'){
                $price = $quantity * 18;
            }
            elseif($request->quality == 'class_C'){
                $price = $quantity * 16;
            }

            $purifiedOil = new PurifiedOil();
            $purifiedOil->quality = $request->quality;
            $purifiedOil->price = $price;
            $purifiedOil->quantity = (string)$quantity;
            $purifiedOil->save();

            return redirect()->back()->with('success', 'Purified oil is now available for sale!');
        } catch (Exception $e) {
            // return $e;
            return redirect()->back()->with('error', 'Server error 500');
        }
    }

    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}
