<?php

namespace App\Filament\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\Login as AuthLogin;

class Login extends AuthLogin
{

    public function mount(): void
    {
        Parent::mount();
        
        if(app()->environment('local')) {
            $this->form->fill([
                'email' => 'admin@gmail.com',
                'password' => 'password',
                'remember' => 'true',
            ]);
        }
    }

}
