<?php

namespace App\View\Composers;

use Illuminate\View\View;

class OauthComposer
{
    public function compose(View $view)
    {
        $providers = [
            'facebook' => [
                'className' => 'text-[#1877F2]',
                'icon' => 'bi-facebook'
            ],
            'apple' => [
                'className' => '',
                'icon' => 'bi-apple'
            ],
            'google' => [
                'className' => 'text-[#EA4335]',
                'icon' => 'icon-google'
            ],
        ];

        $view->with('providers', $providers);
    }
}
