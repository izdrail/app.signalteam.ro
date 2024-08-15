<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login as BasePage;

class LoginUser extends BasePage
{
    public function mount(): void
    {
        //parent::mount();

        $this->form->fill([
            'email' => 'user@todayintel.com',
            'password' => 'password',
            'remember' => true,
        ]);
    }
}
