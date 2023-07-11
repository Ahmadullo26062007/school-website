<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Teacher;
use Livewire\Component;

class TeachersTable extends Component
{

    protected $listeners = ['render_teachers_table' => 'render'];
    public $count = 8;

    public function viewMore()
    {
        $this->count = $this->count + 8;
        $this->emit('render_teachers_table');
    }
    public function render()
    {

        $teachers = Teacher::take($this->count)->orderByDesc('id')->get();
        return view('livewire.frontend.teachers-table', compact('teachers'));
    }
}
