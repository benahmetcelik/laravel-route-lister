<?php

namespace Routes\Http\Controllers;


use Illuminate\Http\Request;


class DashboardController
{
    public function index($theme_select='')
    {

        if (strlen($theme_select) > 0){
            $theme['back']=config("routes.theme")[$theme_select]['back'];
            $theme['text']=config("routes.theme")[$theme_select]['text'];

        }else{
            $theme['back']=config("routes.theme")[config('routes.active_theme')]['back'];
            $theme['text']=config("routes.theme")[config('routes.active_theme')]['text'];


        }
        return view('routes::layouts.app', compact('theme'));
    }



}