<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->videoTutorials = [
            [
                'videoId' => 'hxBL1oYEovI',
                'title' => 'Montage vidéo - Conception audiovisuelle complète',
                'description' => "J'ai conçu et monté cette vidéo pour une voiture, en m'occupant de la conception sonore, de l'introduction et de l'intégration de la vidéo officielle. Cette vidéo présente les caractéristiques les plus distinctives de la voiture avec des plans cinématographiques, des gros plans et des vues en mouvement."
            ],
            // [
            //     'videoId' => 'WLQDpY7lOLg',
            //     'title' => 'Full Stack App with Laravel, Tailwindcss and Vue 3',
            //     'description' => 'You will build a Full stack application, which includes Laravel REST API with authentication, Tailwind.css and Vue 3 with Vuex for UI'
            // ],
            // [
            //     'videoId' => 'WKy-N0q3WRo',
            //     'title' => 'Learn How to build PHP MVC Framework',
            //     'description' => 'Video playlist which will show you how to build an MVC framework from scratch. This will help you understand how modern PHP frameworks work.'
            // ],
        ];

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
