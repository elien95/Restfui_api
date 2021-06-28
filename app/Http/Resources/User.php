<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Lesson as LessonResource ;
use App\Http\Resources\User as UserResource ;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        
            'Full Name'=>$this->name,
            'E-Mail'=>$this->email,
            'Lesson'=> LessonResource::collection($this->lessons),
        ];
        return parent::toArray($request);
    }
}
