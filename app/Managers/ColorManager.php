<?php

namespace App\Managers;



class ColorManager
{
    public function light($key)
    {
        $colorJson = file_get_contents(base_path('resources/data/light-color.json'));
        $colors = json_decode($colorJson);
        return $colors[$key];
    }

    public function dark($key)
    {
        $colorJson = file_get_contents(base_path('resources/data/dark-color.json'));
        $colors = json_decode($colorJson);
        return $colors[$key];
    }
}
