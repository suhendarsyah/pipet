<?php

namespace App\Livewire\Peternak;

use Livewire\Component;
use App\Models\Peternak;

class PeternakIndex extends Component
{
    public function render()
    {
        return view('livewire.peternak.peternak-index',[
            'peternak'=>Peternak::orderBy('id','desc')->paginate(5),
            'title'=> 'Data Peternak'
        ]);

    }

    
}
