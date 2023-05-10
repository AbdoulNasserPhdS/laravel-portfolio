<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FreelanceItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $title;
    public string $image;
    public string $github;


   public function __construct(string $title, string $image, string $github)
   {
       //
       $this->title=$title;
       $this->image=$image;
       $this->github=$github;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.freelance-item');
    }
}
