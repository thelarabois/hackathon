<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\PurifiedOil;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stock = PurifiedOil::all();
        // Calculate the total quantity
        $totalQuantity = PurifiedOil::sum('quantity');
        $totalTransaction = Transaction::sum('quantity');
        $finalInventory = (float)$totalQuantity - (float)$totalTransaction;

        if($finalInventory < 1){
            $finalInventory = $totalQuantity;
            return view('buy.index', compact('finalInventory'))->with('error', 'Not enough stock');
        }else{
            return view('buy.index', compact('finalInventory'));
        }
        
    }

    public function buy(Request $request)
    {
        $request->validate([
            'quantity' => 'required|numeric',
            'purpose' => 'required|string',
        ]);

        $transaction = Transaction::create([
            'quantity' => $request->quantity,
            'purpose' => $request->purpose,
        ]);

        return redirect()->route('transaction.index');
    }

    public function adminIndex(){
        return view('transaction.index');
    }
}
