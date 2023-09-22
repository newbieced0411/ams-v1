<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class LoginForm extends Form
{
    #[Rule('required')]
    public $email = '';
 
    #[Rule('required')]
    public $password = '';
}
