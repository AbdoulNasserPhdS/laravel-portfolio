<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Freelance extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public array $freelanceServices = [];


    public function __construct()
    {
        //

        $this->freelanceServices = [
            [
                'title' => 'Je vais trouver les données dont vous avez besoin',
                'image' => url('/img/freelance1.jpg'),
                'github' => 'https://comeup.com/service/344843/trouver-les-donnees-dont-vous-avez-besoin'
            ],
            [
                'title' => 'Je vais rédiger des descriptions de produits qui captivent votre audience',
                'image' => url('/img/ficheProduit.png'),
                'github' => 'https://comeup.com/service/344955/rediger-des-descriptions-de-produits-qui-captivent-votre-audience'
            ],
            [
                'title' => "Je vais récupérer les données d'une page web, les traiter et les analyser selon les besoins",
                'image' => url('/img/webScrapping.png'),
                'github' => 'https://comeup.com/service/344843/trouver-les-donnees-dont-vous-avez-besoin'
            ],
            [
                'title' => "I will analyze your data to provide valuable insights",
                'image' => url('/img/freelance1.jpg'),
                'github' => 'https://fr.fiverr.com/abdoulnasserham/analyze-your-data-to-provide-valuable-insights'
            ]



            ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.freelance');
    }
}
