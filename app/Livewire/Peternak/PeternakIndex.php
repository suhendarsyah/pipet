<?php

namespace App\Livewire\Peternak;

use Livewire\Component;
use App\Models\Peternak;
use Livewire\Attributes\On; 

class PeternakIndex extends Component
{
    #[on("peternak-created")]
    public function render()

    {
        
        return view('livewire.peternak.peternak-index',[
            'peternak'=>Peternak::orderBy('id','desc')->paginate(5),
            'title'=> 'Data Peternak'
        ]);

        

    }

    
}
