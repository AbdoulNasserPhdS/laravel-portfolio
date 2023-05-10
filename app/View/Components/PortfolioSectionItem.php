<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PortfolioSectionItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public array $sections;
    public array $tabs;

    public function __construct(array $sections,array $tabs)
    {
       
        $this->sections=$sections;
        $this->tabs=$tabs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.portfolio-section-item');
    }
}
