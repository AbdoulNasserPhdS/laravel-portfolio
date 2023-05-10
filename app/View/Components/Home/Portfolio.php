<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    // public array $tabs = [];
    public array $tabs_0 = [];
    public array $tabs_1 = [];

    public array $sections = [];


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

        // $this->sections_ID_tab=[
        //     'Développement Web et Mobile' =>'category_ID_0',
        //     'Intelligence Artificielle' =>'category_ID_1',
        //     'Développement' => 'category_ID_2',
        // ];


        $this->items = [
            [
                'section' => ['Développement Web et Mobile'],
                'category_ID_0' => ['Laravel'],
                'category_ID_1' => [],
                'title' => 'Portfolio: Application Full Stack avec Laravel et Tailwind CSS',
                'image' => url('/img/laravel.png'),
                'github' => ''
            ],
            // [
            //     'section' =>['Développement Web et Mobile'],
            //     'category_ID_0' => ['Ionic/Angular'],
            //     'category_ID_1' => [],
            //     'title' => '',
            //     'image' => url('/img/survey.png'),
            //     'github' => ''
            // ],
            [
                'section' =>['Développement Web et Mobile'],
                'category_ID_0' => ['Django'],
                'category_ID_1' => [],
                'title' => 'Site e-commerce avec django, tailwind CSS, Stripe...',
                'image' => url('/img/django.png'),
                'github' => 'https://github.com/AbdoulNasserPhdS/django_e-commerce'
            ],
            [
                'section' =>['Développement Web et Mobile'],
                'category_ID_0' => ['Flask'],
                'category_ID_1' => [],
                'title' => "Web app Flask, auto génération d'images, tests fonctionnels Selenium, tests unitaires Pytest.",
                'image' => url('/img/flask.png'),
                'github' => ''
            ],
            // [
            //     'section' =>['Développement Web et Mobile'],
            //     'category_ID_0' => ['Flask'],
            //     'category_ID_1' => [ ],
            //     'title' => 'YouTube clone with Yii2',
            //     'image' => url('/img/survey.png'),
            //     'github' => 'https://github.com/thecodeholic/Yii2-Youtube-Clone'
            // ],
            
            // [
            //     'section' =>['Développement Web et Mobile'],
            //     'category_ID_0' => ['Scratch'],
            //     'category_ID_1' => [ ],
            //     'title' => 'YouTube clone with Yii2',
            //     'image' => url('/img/survey.png'),
            //     'github' => 'https://github.com/thecodeholic/Yii2-Youtube-Clone'
            // ],
            [
                'section' =>['Intelligence Artificielle'],
                'category_ID_0' => [],
                'category_ID_1' => ['Machine Learning'],
                'title' => 'Comparison of machine learning methods for predicting parking space availability.',
                'image' => url('/img/modelCompare.png'),
                'github' =>  ''
            ],
            
            // [
            //     'section' =>['Intelligence Artificielle'],
            //     'category_ID_0' => [],
            //     'category_ID_1' => ['Deep learning'],
            //     'title' => 'Yii2 + VueJs Notes application',
            //     'image' => url('/img/survey.png'),
            //     'github' =>  'https://github.com/thecodeholic/vue.js-yii2-notes'
            // ],
        ];

        // $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category_ID_0')));
        $this->tabs_0 = array_unique(Arr::flatten(Arr::pluck($this->items, 'category_ID_0')));
        $this->tabs_1 = array_unique(Arr::flatten(Arr::pluck($this->items, 'category_ID_1')));


        $this->sections = array_unique(Arr::flatten(Arr::pluck($this->items, 'section')));

        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }



}