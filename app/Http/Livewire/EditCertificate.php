<?php

namespace App\Http\Livewire;

use App\Models\Certificate;
use App\Models\Student;
use Livewire\Component;

class EditCertificate extends Component
{
    public $student_id, $type, $degree, $band,$error;
    public $certificate;
    public $IT = true;
    public $Cefr = false;
    public $IELTS = false;

    public function mount($certificate){
        $certificate=$this->certificate;

        $this->student_id=$this->certificate->student_id;
     }

    public function createCertificate()
    {
        if ($this->type == 1) {
            if ($this->band>=5 && $this->band<=9) {
                $this->certificate->update([
                    'type' => $this->type,
                    'ball' => $this->band,
                    'degree' => '0',
                    'student_id' => $this->student_id,
                ]);
                return redirect()->route('certificate.index');
            }else{
                $this->error='ball 5 dan 9 gacha bo`lsin';
            }
        } else if ($this->type == 2) {
            $this->certificate->update([
                'type' => $this->type,
                'degree' => $this->degree,
                'ball' => '',
                'student_id' => $this->student_id,
            ]);
            return redirect()->route('certificate.index');
        } else if ($this->type == 3) {
            $this->certificate->update([
                'type' => $this->type,
                'ball' => '0',
                'degree' => '0',
                'student_id' => $this->student_id,
            ]);
            return redirect()->route('certificate.index');
        }


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

        return view('livewire.edit-certificate',compact('students'));
    }
}
