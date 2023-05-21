<?php

namespace App\Http\Controllers\Api\V1;

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionDetailRequest;
use App\Http\Requests\UpdateTransactionDetailRequest;
use App\Http\Resources\TransactionDetailResource;
use App\Models\TransactionDetail;

class TransactionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return TransactionDetailResource::collection(TransactionDetail::all());
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
    public function store(StoreTransactionDetailRequest $request)
    {
        //
        $exam =   TransactionDetail::create($request->validated());
        return   TransactionDetailResource::make($exam);
    }




    /**
     * Display the specified resource.
     */
    public function show(TransactionDetail $transactionDetail)
    {
        //

        $data =  TransactionDetailResource::make($transactionDetail);

        return response()->json([
            'data' => $data,
            'status' => 200

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransactionDetail $transactionDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionDetailRequest $request, TransactionDetail $transactionDetail)
    {
        //
        $transactionDetail->update($request->validated());
        return   TransactionDetailResource::make($transactionDetail);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionDetail $transactionDetail)
    {
        //
        $validate =  $transactionDetail->delete();

        return response()->json([
            'message' => 'Success Delete Transaction Detail',
            'status' => 200,
            'true' => $validate

        ]);
    }
}
