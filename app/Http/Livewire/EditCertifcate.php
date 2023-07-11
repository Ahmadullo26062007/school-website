<?php

namespace App\Http\Livewire;

use App\Models\Certificate;
use App\Models\Student;
use Livewire\Component;

class EditCertifcate extends Component
{

    public $certificate, $type, $band, $degree;

    public $IT = true;
    public $Cefr = false;
    public $IELTS = false;


    public function mount($certificate)
    {
        $this->certificate = $certificate;
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

    public function editCertificate()
    {
        if ($this->type == 1) {
            $this->certificate->update([
                'type' => '1',
                'ball' => $this->band,
                'degree' => 0,
            ]);
        } else if ($this->type == 2) {
            $this->certificate->update([
                'type' => '2',
                'degree' => $this->degree,
                'ball' => 0,
            ]);
        } else if ($this->type == 3) {
            $this->certificate->update([
                'type' => '3',
                'ball' => 0,
                'degree' => 0,
            ]);
        }



        return redirect()->route('certificate.index');
    }

    public function render()
    {
        // $student = $this->certificate->students->fullname;
        $certificate = $this->certificate;
        return view('livewire.edit-certifcate', compact('certificate'));
    }
}