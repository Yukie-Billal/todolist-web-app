<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentIndex extends Component
{
    // public $students;

    public function render()
    {
        return view('livewire.student-index',[
            'students' => Student::latest()->get()
        ]);
    }
}
