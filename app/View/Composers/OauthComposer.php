<?php

namespace App\View\Composers;

use Illuminate\View\View;

class OauthComposer
{
    public function compose(View $view)
    {
        $providers = [
            'google' => [
                'className' => 'w-16 text-[#EA4335]',
                'icon' => 'google'
            ],
            'facebook' => [
                'className' => 'text-[#1877F2]',
                'icon' => 'bi-facebook'
            ],
            'apple' => [
                'className' => '',
                'icon' => 'bi-apple'
            ]
        ];

        $view->with('providers', $providers);
    }
}
