<?php

namespace App\Http\Livewire;

use App\Models\Classes;
use App\Models\Course;
use Livewire\Component;

class CourseIndex extends Component
{
    public $count=8;

    function pilus()
    {
        $this->count=$this->count+4;
    }
    public function render()
    {
        $classes=  Course::take($this->count)->with('teacher')->orderByDesc('id')->get();
        return view('livewire.course-index',compact('classes'));
    }
}
