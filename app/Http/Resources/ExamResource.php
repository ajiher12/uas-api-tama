<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            'id_exams' =>     $this->id,
            'id_student' => $this->id_student,
            'assignn_type' => $this->assign_type,
            'score' => $this->score,


        ];
    }
}
