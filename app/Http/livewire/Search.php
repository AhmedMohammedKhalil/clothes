<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $search;

    public function makeSearch() {
        if($this->search != "") {
            return redirect()->route('shop',['page_type'=>'search','content'=>$this->search]);
        }
    }
    public function render()
    {
        return view('livewire.search');
    }
}
