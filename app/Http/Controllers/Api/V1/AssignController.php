<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Assign;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssignRequest;
use App\Http\Requests\UpdateAssignRequest;
use App\Http\Resources\AssignResource;

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return AssignResource::collection(Assign::all());
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssignRequest $request)
    {
        //

        $student =   Assign::create($request->validated());

        return   AssignResource::make($student);
    }

    /**
     * Display the specified resource.
     */
    public function show(Assign $assign)
    {
        //
        return   AssignResource::make($assign);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assign $assign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssignRequest $request, Assign $assign)
    {
        //

        $assign->update($request->validated());
        return   AssignResource::make($assign);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assign $assign)
    {
        //

        $assign->delete();

        return response()->noContent();
    }
}
