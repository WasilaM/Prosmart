<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\Service;
use App\Models\Setting;

class Footer extends AbstractWidget
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
        $social = Setting::where('name', 'SocialMedia')->first();
        $services = Service::where('status', '1')->get();
        return view('widgets.footer', [
            'config' => $this->config,
        ])->withServices($services)->withData($social->data);
    }
}
