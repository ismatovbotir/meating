<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use App\Models\Shop;

class Add extends Component
{
    public $shopName="";

    public function showName(){
        Shop::upsert(
            ['name'=>$this->shopName],
            ['name'],
            ['name']
        );
        $this->reset();
        $this->dispatch('shop-created');
    }
    public function render()
    {
        return view('livewire.shop.add');
    }
}
