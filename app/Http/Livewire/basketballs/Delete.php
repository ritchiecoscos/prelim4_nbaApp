<?php

namespace App\Http\Livewire\Basketballs;

use Livewire\Component;
use App\Models\Basketball;
class Delete extends Component
{
    public $basketId;

    public function getBasketballProperty(){
        return Basketball::select('id','player_name', 'age', 'jersey_no')
        ->find($this->basketId);

    }
    public function deletePlay(){
        $this->basketball->delete();

        return redirect('/index')->with('message', 'Deleted Successfully!');


    }
    public function render()
    {
        return view('livewire.basketballs.delete');
    }
}
