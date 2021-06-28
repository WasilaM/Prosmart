<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Service;
use App\Models\Client;

class DocumentaryFilms extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $film = Service::where('status','1')->whereTranslationLike('title', 'Documentary Films')->first();
        /* dd($film->importance); */
        $clients = Client::where('status', '1')->whereNotNull('film')->get();
        //dd($clients);
        return view('widgets.documentary_films', [
            'config' => $this->config,
        ])->withFilm($film)->withClients($clients);
    }
}
