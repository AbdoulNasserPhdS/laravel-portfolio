<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public string $href='';
    public string $variant = 'primary';
    public string $target = '_self';
    
    public function __construct(string $href, string $variant = 'primary', string $target = '_self')
    {
        //
        $this->variant=$variant;
        $this->href=$href;
        $this->target=$target;

        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-link');
    }
}
