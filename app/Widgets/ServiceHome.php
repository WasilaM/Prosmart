<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Service;

class ServiceHome extends AbstractWidget
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
        return view('widgets.service_home', [
            'config' => $this->config,
        ])->withServices($services);
    }
}
