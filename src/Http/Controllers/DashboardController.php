<?php
/**
 * Created by PhpStorm.
 * User: Tuhin
 * Date: 12/22/2017
 * Time: 8:52 PM
 */

namespace Routes\Http\Controllers;


use Illuminate\Http\Request;


class DashboardController
{
    public function index($theme='')
    {

        $theme['back']=config("routes.".config('routes.active_theme').".back");
        $theme['text']=config("routes.".config('routes.active_theme').".text");

        if (strlen($theme) > 0){
            $theme['back']=config("routes.".$theme.".back");
            $theme['text']=config("routes.".$theme.".text");
        }

        return view('routes::layouts.app', $theme);
    }



    /**
     * Manage Site map
     */
    public function sitemap()
    {
        $data = [
            'pages' => Page::where('robot_index', 'index')->paginate(15),
            'sitemaps' => (new SiteMap())->all()
        ];
        return view('seo::pages.dashboard.sitemap', $data);
    }

    /**
     *  Import Export and Download Pages
     */
    public function tools()
    {
        $data = [];
        return view('seo::pages.dashboard.tools', $data);
    }

    /**
     *
     */
    public function advanced()
    {
        $data = [];
        return view('seo::pages.dashboard.advanced', $data);
    }
}