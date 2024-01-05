<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoretransactionRequest;
use App\Http\Requests\UpdatetransactionRequest;
use Illuminate\Http\Request;
use App\Models\Travel;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoretransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $travels = Travel::where('id', $request->id)->first();
        $travel = Travel::where('id', $request->id)->first();

        return view("transaction.page", [
            'travels' => $travels,
            'travel' => $travel
        ]);
    }

    public function transaction(Request $request)
    {
        $this->validate($request, [
            'user_id' => ['required', 'numeric'],
            'travel_id' => ['required', 'numeric'],
            'total_price' => ['required', 'numeric'],
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'quantity' => 'required|numeric',
            'city' => 'required|string|max:100'
        ]);
    
        $validatedData = $request->all();
    
        $quantity = $validatedData['quantity'];
        $totalPayment = $validatedData['total_price'] * $quantity;
        $totalPrice = $totalPayment * 101/100;
        $user = User::where('users.id', $validatedData['user_id'])->first();
        $travels = Travel::where('travel.id', $validatedData['travel_id'])->first();
    
        $transaction = new Transaction([
            'user_id' => $user->id,
            'travel_id' => $travels->id,
            'name' => $validatedData['name'],
            'phone_number' => $validatedData['phone_number'],
            'quantity' => $validatedData['quantity'],
            'city' => $validatedData['city'],
            'total_price' => $totalPrice,
            'payment_status' => 'PROCESS'
        ]);
        $transaction->save();
        
        $transactions = Transaction::select('*')
            ->join('users', 'transactions.user_id', '=', 'users.id')
            ->join('travel', 'transactions.travel_id', '=', 'travel.id')
            ->get();

        $travel = Travel::where('travel.id', $validatedData['travel_id'])->first();

        $result = array(
            'pax' => $quantity,
            'totalPayment' => $totalPayment,
            'totalPrice' => $totalPrice
        );
        
        return view('invoice.page', compact('transaction', 'travel', 'result'));
    }

    public function profile() 
    {
        $user = Auth::user();

        $transactions = Transaction::where('user_id', $user->id)
            ->join('travel', 'transactions.travel_id', '=', 'travel.id')
            ->select('transactions.*', 'travel.*')
            ->get();
        

        foreach ($transactions as $transaction) {
            $quantity = $transaction->quantity;
            $totalPayment = $transaction->total_price;
            $subtotal = $totalPayment * $quantity;
            $transaction->totalPrice = $subtotal/2;
        }

        return view('user.profile.page', [
            'user' => $user,
            'transactions' => $transactions,
        ])->with('success', 'Travel bookes successfully');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetransactionRequest $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}
