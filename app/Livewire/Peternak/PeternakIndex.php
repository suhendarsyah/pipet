<?php

namespace App\Livewire\Peternak;

use Livewire\Component;
use App\Models\Peternak;
use Livewire\Attributes\On; 
use Livewire\WithPagination;

class PeternakIndex extends Component
{
    public $statusUpdate = false;
    use WithPagination;
    #[On("peternak-created")]
    #[On("peternak-update")]

    public function render()
    {
        return view('livewire.peternak.peternak-index',[
            'peternak'=>Peternak::orderBy('id','desc')->paginate(4),
            'title'=> 'Data Peternak'
        ]);
    }

    public function getPeternak($id){
    
        $this->statusUpdate = true;
        $peternak= Peternak::find($id);
        $this->dispatch('get-peternak',  $peternak);


    // $this->emit('getPeternak', $peternak);
    }

    
}
