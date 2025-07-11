<?php

namespace App\View\Composers;

use Illuminate\View\View;

class NavigationComposer
{
    public function compose(View $view)
    {
        $navItems = [
            'logo' => [
                'link' => '/',
                'label' => 'Loremipsum',
                'className' => 'flex gap-1'
            ],
            'home' => [
                'link' => '/',
                'label' => 'Home',
                'className' => 'hidden lg:block'
            ],
            'shop' => [
                'link' => '/shop',
                'label' => 'Shop',
                'className' => 'hidden lg:block'
            ],
            'contact' => [
                'link' => '/contact',
                'label' => 'Contact',
                'className' => 'hidden lg:block'
            ],
            'login' => [
                'link' => '/login',
                'label' => 'Login/register',
                'className' => 'hidden lg:block ml-auto'
            ]
        ];
        $view->with('navItems', $navItems);
    }
}
