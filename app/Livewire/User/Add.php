<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Add extends Component
{
    public $userName="";
    public $userEmail;
    public $userRole="";
    public $userPassword;
    public $userShop="";
    public $shops;
    
    
    
    public function mount(){
        $this->loadData();
        //$this->on('shop-created',fn()=>$this->loadShops());
    }

    
    public function loadData(){
        $this->shops=Shop::all();
       // dd($this->shops);
        //$this->users=User::whereNot('role','admin')->get();
    }
    
    public function createNewUser(){
       
       // dd($this->userRole);
        User::upsert(
            ['name'=>$this->userName,'email'=>$this->userEmail,'role'=>$this->userRole,'password'=>Hash::make($this->userPassword)],
            ['email'],
            ['name','password','shop_id','role']
        );
        $this->resetExcept(
            'shops'
        );
        //$this->loadData();
        $this->dispatch('user-created');
    }
    public function render()
    {
        return view('livewire.user.add');
    }
}
