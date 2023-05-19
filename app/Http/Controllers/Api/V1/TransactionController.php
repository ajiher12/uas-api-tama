<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionResource;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data =   TransactionResource::collection(Transaction::all());

        return response()->json([
            'data' => $data,
            'status' => 200

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        //
        // dd($request->validated());

        $item =   Transaction::create($request->validated());
        $validate =    TransactionResource::make($item);

        return response()->json([
            'transaction' => $validate,
            'status' => 200

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $item)
    {
        //
        $data =  TransactionResource::make($item);

        return response()->json([
            'data' => $data,
            'status' => 200

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //

        $transaction->update($request->validated());
        return   TransactionResource::make($transaction);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
        $validate =  $transaction->delete();

        return response()->json([
            'message' => 'Success Delete Transaction',
            'status' => 200,
            'true' => $validate

        ]);
    }
}
