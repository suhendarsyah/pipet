<?php

namespace App\Livewire\Peternak;

use Livewire\Component;
use App\Models\Peternak;
use Livewire\Attributes\On;

class PeternakUpdate extends Component
{

    public $title = "Edit Peternak";
    public $nama;
    public $alamat;
    public $email;
    public $telp;
    public $peternakId;
    // public Peternak $peternak;
    
    #[On('get-peternak')]

    
    public function updatePeternak($peternak){
        $this->nama = $peternak['nama'];
        $this->alamat = $peternak['alamat'];
        $this->email = $peternak['email'];
        $this->telp = $peternak['telp'];
        $this->peternakId = $peternak['id'];
    }
    
    public function render()
    {
        return view('livewire.peternak.peternak-update');
        // $this->refreshInput();
    }

    public function update(){
        // harus dibuat validasi dulu

        if($this->peternakId){
            $peternak = Peternak::find($this->peternakId);
            $peternak->update([
                'nama' => $this->nama,
                'alamat' => $this->alamat,
                'email' => $this->email,
                'telp' => $this->telp
            ]);

            $this->refreshInput();
            // $this->redirect(route('peternak.index'));
            $this->dispatch('peternak-update');

            session()->flash('success','Peternak berhasil di Update');
        }
    }

    private function refreshInput(){
        $this-> nama = null ;
        $this-> alamat = null;
        $this-> email = null;
        $this-> telp = null;
    }

    

}
