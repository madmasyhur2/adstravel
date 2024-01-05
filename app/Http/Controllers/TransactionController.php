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

    // public function transactions(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'user_id' => ['required', 'numeric'],
    //         'travel_id' => ['required', 'numeric'],
    //         'total_price' => ['required', 'numeric'],
    //         'name' => 'required|string|max:255',
    //         'phone_number' => 'required|string|max:15',
    //         'pax' => 'required|numeric',
    //         'city' => 'required|string|max:100'
    //     ]);
    //     if ($validator->fails()) {
    //         return back()->withErrors($validator)->withInput();
    //     }
    //     try {
    //         $user = User::where('user_id', $request->user_id)->first();
    //         $travel = Travel::where('id', $request->travel_id)->first();
    //         $totalPrice = $request->total_price * $request->pax;
    //         $transaction = new Transaction([
    //             'user_id' => $user->id,
    //             'travel_id' => $request->travel_id,
    //             'name' => $request->name,
    //             'phone_number' => $request->phone_number,
    //             'pax' => $request->pax,
    //             'city' => $request->city,
    //             'total_price' => $totalPrice,
    //             'payment_status' => 'PROCESS'
    //         ]);
    //         $transaction->save();
    //         return view('invoice.page', [
    //             'transaction' => $transaction,
    //             'travel' => $travel
    //         ]);
    //     } catch (\Throwable $th) {
    //         return back()->withErrors($th->getMessage())->withInput();
    //     }
    // }

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
        $totalPrice = $validatedData['total_price'] * $quantity;
        $user = User::where('users.id', $validatedData['user_id'])->first();
    
        $transaction = new Transaction([
            'user_id' => $user->id,
            'travel_id' => $validatedData['travel_id'],
            'name' => $validatedData['name'],
            'phone_number' => $validatedData['phone_number'],
            'quantity' => $validatedData['quantity'],
            'city' => $validatedData['city'],
            'total_price' => $totalPrice,
            'payment_status' => 'PROCESS'
        ]);
    
        $transaction->save();
    
        $travel = Travel::where('travel.id', $transaction->travel_id)->first();
    
        return view('invoice.page', [
            'transaction' => $transaction,
            'travel' => $travel
        ]);
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
