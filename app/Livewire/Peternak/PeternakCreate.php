<?php

namespace App\Livewire\Peternak;

use Livewire\Component;
use App\Models\Peternak;

class PeternakCreate extends Component
{

    public $nama;
    public $alamat;
    public $email;
    public $telp;

    public function render()
    {
        return view('livewire.peternak.peternak-create');
    }

    public function create(){
        Peternak::create([
            'nama'   =>$this->nama,
            'alamat' =>$this->alamat,
            'email'  =>$this->email,
            'telp'   =>$this->telp
        ]);

        $this->dispatch('peternak-created');
        $this->refrehsInput();
    }

    private function refrehsInput(){
        $this-> nama = null ;
        $this-> alamat = null;
        $this-> email = null;
        $this-> telp = null;
    }
}
