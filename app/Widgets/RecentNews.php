<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Setting;
use App\Models\Client;

class RecentNews extends AbstractWidget
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
        $recent = Setting::where('name', 'Recent')->first();
        $clients = Client::where('status', '1')->get();
        return view('widgets.recent_news', [
            'config' => $this->config,
        ])->withRecent($recent)->withClients($clients);
    }
}
