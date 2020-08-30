<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Theme;
use App\Place;
use App\Keyword;
use App\Character;

class ScenarioController extends Controller
{
    public function index()
    {
        $themes = Theme::select('theme')
            ->orderby('theme','desc')
            ->get();

        $places = Place::select('place')
            ->orderby('place','desc')
            ->get();

        $keywords = Keyword::select('keyword')
            ->orderby('keyword','desc')
            ->get();

        $characters = Character::select('character')
            ->orderby('character','desc')
            ->get();

        $data=[
            'themes'=>$themes,
            'places'=>$places,
            'keywords'=>$keywords,
            'characters'=>$characters,
        ];

        return $data;
    }
}
