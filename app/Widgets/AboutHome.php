<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\About;

class AboutHome extends AbstractWidget
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
        $about = About::where('status', '1')->first();
        return view('widgets.about_home', [
            'config' => $this->config,
        ])->withAbout($about);
    }
}
