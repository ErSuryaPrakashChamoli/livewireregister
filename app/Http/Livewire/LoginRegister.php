<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginRegister extends Component
{

    public $users, $email, $password,$name;
    public $registerForm = false;
   

    public function render()
    {
        return view('livewire.login-register');
    }

    private function resetInputField(){
        $this->name = '';
        $this->users = '';
        $this->password = '';
        $this->name = '';
    }

    public function login(){
        $validateData = $this->validate([
               'email' => 'required|email',
               'password' => 'required',

        ]);

        if(\Auth::attempt(['email'=>$this->email,
           'password' =>$this->password 
        ])){
           
            session()->flash('message','You are scessfully login');
        }else{

            session()->flash('error','You have error');
        }

    }

    public function register(){
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore(){

        $validateData = $this->validate([
            'name' =>'required',
            'email' => 'required|email',
            'password' => 'required',

     ]);

    $this->password = Hash::make($this->password);

    User::create(['name' =>$this->name,'email'=>$this->email,'password'=>$this->password]);

    session()->flash('message','Your Register Sccessfully,Go to login page');

    $this->resetInputField();

    }
}
