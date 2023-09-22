<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\UserLoginLog;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;

#[Layout('layout.app')]
class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        $validated = $this->form->validate();

        # If no user found.
        // dd(!Auth::attempt($validated));
        if (!Auth::attempt($validated)) {
            session()->flash('error', 'This email does not exist.');
        } else {
            UserLoginLog::successLog(auth()->user());
            User::encodeLogin(auth()->user());
            $this->redirect(Dashboard::class);
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
