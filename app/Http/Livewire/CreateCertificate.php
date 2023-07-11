<?php

namespace App\Http\Livewire;

use App\Models\Certificate;
use App\Models\Student;
use Livewire\Component;

class CreateCertificate extends Component
{

    public $student_id, $type, $degree, $band;

    public $IT = true;
    public $Cefr = false;
    public $IELTS = false;



    public function createCertificate()
    {
        if ($this->type == 1) {
            Certificate::create([
                'type' => $this->type,
                'ball' => $this->band,
                'student_id' => $this->student_id,
            ]);
        } else if ($this->type == 2) {
            Certificate::create([
                'type' => $this->type,
                'degree' => $this->degree,

                'student_id' => $this->student_id,
            ]);
        } else if ($this->type == 3) {
            Certificate::create([
                'type' => $this->type,
                'student_id' => $this->student_id,
            ]);
        }

        return redirect()->route('certificate.index');
    }

    public function updateType()
    {
        if ($this->type == 1) {
            $this->IELTS = true;
            $this->Cefr = false;
            $this->IT = false;
        } else if ($this->type == 2) {
            $this->Cefr = true;
            $this->IELTS = false;
            $this->IT = false;
        } else if ($this->type == 3) {
            $this->IT = true;
            $this->IELTS = false;
            $this->Cefr = false;
        }
    }

    public function render()
    {
        $students = Student::pluck('fullname', 'id');
        return view('livewire.create-certificate', compact('students'));
    }
}
