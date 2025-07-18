<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On; 
use App\Models\User;
use App\Models\Shop;

class Index extends Component
{
   
    public $users;
   
    public function mount(){
        $this->loadData();
        //$this->on('shop-created',fn()=>$this->loadShops());
    }

    #[On('user-created')] 
    public function loadData(){
        //$this->users=User::all();
        //dd($this->shops);
        $this->users=User::whereNot('role','admin')->with('shop')->get();
    }
    public function render()
    {
        return view('livewire.user.index');
    }
}
