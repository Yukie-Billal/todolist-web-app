<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class TestLoading extends Component
{
    public $nama;
    public $input;
    public $text = 'ini text';

    public function updated($propertyName)
    {
        // dd($propertyName);
    }

    public function buatNama()
    {
        $this->nama = 'Yukie M Billal';
        User::all();
        // dd($this->nama);
    }

    public function render()
    {
        return view('livewire.test-loading');
    }
}
