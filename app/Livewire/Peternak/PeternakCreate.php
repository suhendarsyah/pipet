<?php

namespace App\Livewire\Peternak;

use session;
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

        $this->validate([
            'nama'   =>'required | min:3',
            'alamat' =>'required | max:255',
            'email'  =>'required | email',
            'telp'   =>'required | max:15'
        ]);
        Peternak::create([
            'nama'   =>$this->nama,
            'alamat' =>$this->alamat,
            'email'  =>$this->email,
            'telp'   =>$this->telp
        ]);
        
        $this->dispatch('peternak-created');
        
        $this->refreshInput();
        session()->flash('success','Peternak berhasil ditambah');
        
    }

    

    private function refreshInput(){
        $this-> nama = null ;
        $this-> alamat = null;
        $this-> email = null;
        $this-> telp = null;
        
    }
}
