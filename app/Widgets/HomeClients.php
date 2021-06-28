<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Client;

class HomeClients extends AbstractWidget
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
        $clients = Client::where('status', '1')->get();
        return view('widgets.home_clients', [
            'config' => $this->config,
        ])->withClients($clients);
    }
}
