<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Models\HomeBanner;

class BannerHome extends AbstractWidget
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
        $banners = HomeBanner::where('status','1')->get();
        /* dd($banners); */
        return view('widgets.banner_home', [
            'config' => $this->config,
        ])->withBanners($banners);
    }
}
