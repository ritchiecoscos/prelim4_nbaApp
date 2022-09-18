<?php

namespace App\Http\Livewire\Basketballs;

use Livewire\Component;
use App\Models\Basketball;


class Create extends Component
{
    public $player_name, $age, $jersey_no, $conference, $position, $email;

    public function addPlay(){
        $this->validate([
            'player_name'              =>            ['required' ,'string', 'max:255'],
            'age'               =>            ['required' ,'string', 'max:255'],
            'jersey_no'         =>            ['required' ,'string', 'max:255'],
            'conference'        =>            ['required' ,'string', 'max:255'],
            'position'          =>            ['required' ,'string', 'max:255'],
        ]);

        Basketball::create([
            'player_name'                =>        $this->player_name,
            'age'                 =>        $this->age,
            'jersey_no'           =>        $this->jersey_no,
            'conference'          =>        $this->conference,
            'position'            =>        $this->position,
        ]);

        return redirect('/index')->with('message', 'Added Successfully!!');
    }

    public function render()
    {
        return view('livewire.basketballs.create');
    }
}
