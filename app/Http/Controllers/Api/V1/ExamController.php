<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\Exam;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExamResource;
use App\Http\Requests\StoreExamRequest;
use App\Http\Requests\UpdateExamRequest;


// Import db package 
use Illuminate\Support\Facades\DB;



class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


        return ExamResource::collection(Exam::all());
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExamRequest $request)
    {
        //
        $exam =   Exam::create($request->validated());

        return   ExamResource::make($exam);
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
        return   ExamResource::make($exam);
    }

    public  function showGrade()
    {

        $grading = DB::table('exams as a')
            ->join('students as b', 'a.id_student', '=', 'b.id')
            ->select(DB::raw('SUM(score) as total_score'), DB::raw('(CASE 
            WHEN SUM(score) <= "65" THEN "D" 
            WHEN SUM(score) <= "75" THEN "C" 
            WHEN SUM(score) <= "85" THEN "B" 
            ELSE "A" 
            END) AS grading_status'), 'b.student_name')
            ->groupBy('b.student_name')
            ->get();




        // return    count($grading);

        // for ($i = 0; $i < count($grading); $i++) {
        //     var_dump($grading[$i]);
        // }
        // ($grading);

        return response()->json([
            'grading' => $grading,
            'status' => 'success'

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExamRequest $request, Exam $exam)
    {
        //

        $exam->update($request->validated());
        return   ExamResource::make($exam);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        //
        $exam->delete();

        return response()->noContent();
    }
}
