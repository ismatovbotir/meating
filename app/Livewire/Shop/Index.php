<?php

namespace App\Livewire\Shop;

use App\Models\Shop;
use Livewire\Component;
use Livewire\Attributes\On; 

class Index extends Component
{
    public $shops;

    public function mount(){
        $this->loadShops();
        //$this->on('shop-created',fn()=>$this->loadShops());
    }

    #[On('shop-created')] 
    public function loadShops(){
        $this->shops=Shop::withCount('users')->get();
    }

    public function render()
    {
        
        //dd($shops);
        return view('livewire.shop.index',['shops'=>$this->shops]);
    }
}
