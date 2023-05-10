<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public array $navigationItems=[];

    
    public function __construct()
    {
        //
        $this->navigationItems=[
            ['label'=>'A propos','href'=>'#about'],
            ['label'=>'Projets','href'=>'#portfolio'],
            ['label'=>'Service Freelances','href'=>'#tutorials'],
            ['label'=>'Contact','href'=>'#contact']

        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar');
    }
}
