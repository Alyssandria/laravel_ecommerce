<?php

namespace App\View\Composers;

use Illuminate\View\View;

class OauthComposer
{
    public function compose(View $view)
    {
        $providers = [
            'google' => [
                'className' => 'text-[#EA4335]',
                'icon' => 'bi-google'
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
