<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Service;

class NavBar extends AbstractWidget
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
        $services = Service::where('status', '1')->get();
        return view('widgets.nav_bar', [
            'config' => $this->config,
        ])->withServices($services);
    }
}
