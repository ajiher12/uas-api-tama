<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\Item;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Http\Resources\ItemResource;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data =   ItemResource::collection(Item::all());

        return response()->json([
            'data' => $data,
            'status' => 200

        ]);
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
    public function store(StoreItemRequest $request)
    {
        //
        // dd($request->validated());

        $item =   Item::create($request->validated());
        $validate =    ItemResource::make($item);

        return response()->json([
            'item' => $validate,
            'status' => 200

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
        $data =  ItemResource::make($item);

        return response()->json([
            'data' => $data,
            'status' => 200

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        //

        $item->update($request->validated());
        return   ItemResource::make($item);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
        $validate =  $item->delete();

        return response()->json([
            'message' => 'Success Delete Item',
            'status' => 200,
            'true' => $validate

        ]);
    }
}
