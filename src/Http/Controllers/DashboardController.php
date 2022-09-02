<?php

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



}