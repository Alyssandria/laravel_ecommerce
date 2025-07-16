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
                'label' => '',
                'icon' => 'logofull',
                'iconClassName' => 'w-32 sm:w-52',
                'className' => 'flex gap-1'
            ],
            'home' => [
                'link' => '/',
                'label' => 'Home',
                'icon' => '',
                'iconClassName' => '',
                'className' => 'hidden lg:block'
            ],
            'shop' => [
                'link' => '/shop',
                'label' => 'Shop',
                'iconClassName' => '',
                'icon' => '',
                'className' => 'hidden lg:block'
            ],
            'contact' => [
                'link' => '/contact',
                'iconClassName' => '',
                'label' => 'Contact',
                'icon' => '',
                'className' => 'hidden lg:block'
            ],
        ];

        $view->with('navItems', $navItems);
    }
}
