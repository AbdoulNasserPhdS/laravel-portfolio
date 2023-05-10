<?php

namespace App\View\Components;

use Illuminate\View\Component;

class videoTutorialItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public string $videoId;
     public string $title;
     public string $description;


    public function __construct(string $videoId, string $title, string $description)
    {
        //
        $this->videoId = $videoId;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.video-tutorial-item');
    }
}
