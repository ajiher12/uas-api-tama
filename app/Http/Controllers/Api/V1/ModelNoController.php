<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
// namespace App\Http\Controllers;


use App\Models\ModelNo;


use App\Http\Resources\ModelNoResource;

use App\Http\Requests\StoreModelNoRequest;
use App\Http\Requests\UpdateModelNoRequest;

class ModelNoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data =   ModelNoResource::collection(ModelNo::all());

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
    public function store(StoreModelNoRequest $request)
    {
        //
        $modelno =   ModelNo::create($request->validated());
        $validate =    ModelNoResource::make($modelno);

        return response()->json([
            'ModelNo' => $validate,
            'status' => 200

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ModelNo $modelNo)
    {
        //

        $data =  ModelNoResource::make($modelNo);

        return response()->json([
            'data' => $data,
            'status' => 200

        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelNo $modelNo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModelNoRequest $request, ModelNo $modelNo)
    {
        //

        $modelNo->update($request->validated());
        return   ModelNoResource::make($modelNo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelNo $modelNo)
    {
        //

        $validate =  $modelNo->delete();

        return response()->json([
            'message' => 'Success Delete Model No',
            'status' => 200,
            'true' => $validate

        ]);
    }
}
