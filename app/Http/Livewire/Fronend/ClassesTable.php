<?php

namespace App\Http\Livewire\Fronend;

use App\Models\Classes;
use Livewire\Component;

class ClassesTable extends Component
{

    protected $listeners = ['render_classes_table' => 'render'];

    public $count = 8;

    public function viewMore()
    {
        $this->count = $this->count + 8;
        $this->emit('render_classes_table');
    }

    public function render()
    {
        $classes = Classes::where('school_id',env('SCHOOL_ID'))->take($this->count)->orderByDesc('id')->get();
        return view('livewire.fronend.classes-table', compact('classes'));
    }
}
