<?php

namespace App\Http\Livewire\Basketballs;

use Livewire\Component;
use App\Models\Basketball;
class Edit extends Component
{
    public $basketId;
    public $player_name, $age, $jersey_no, $conference, $position;

    public function mount(){
        $this->player_name = $this->basketball->player_name;
        $this->age = $this->basketball->age;
        $this->jersey_no = $this->basketball->jersey_no;
        $this->position = $this->basketball->position;
        $this->conference = $this->basketball->conference;

    }

    public function editPlay(){
        $this->validate([
            'player_name'              =>            ['required' ,'string', 'max:255'],
            'age'               =>            ['required' ,'string', 'max:255'],
            'jersey_no'         =>            ['required' ,'string', 'max:255'],
            'conference'        =>            ['required' ,'string', 'max:255'],
            'position'          =>            ['required' ,'string', 'max:255'],
        ]);
        $this->basketball->update([
            'player_name'             =>        $this->player_name,
            'age'              =>        $this->age,
            'jersey_no'        =>        $this->jersey_no,
            'conference'       =>        $this->conference,
            'position'         =>        $this->position,
        ]);
        return redirect('/index')->with('message' , 'Updated SucessFully');
    }


    public function getBasketballProperty(){
        return Basketball::find($this->basketId);
    }


    public function render()
    {
        return view('livewire.basketballs.edit');
    }
}
