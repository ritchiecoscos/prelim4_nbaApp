<?php

namespace App\Http\Livewire\Basketballs;

use Livewire\Component;
use App\Models\Basketball;

class Index extends Component
{
    public function loadPlay(){
        $basketballs = Basketball::orderBy('created_at',('desc'))->get();


        return compact('basketballs');
    }
    public function render()
    {
        return view('livewire.basketballs.index', $this->loadPlay());
    }
}
