<?php

namespace App\Blendx;

class News extends Blender
{
    public static function store_validator($route)
    {
        $custom_validator = [
            'image' => 'nullable'
        ];
        $store = parent::store_validator($route);

        $finale = array_merge($store,$custom_validator);
        return $finale;

    }

    public static function update_validator($route)
    {
        $custom_validator = [

        ];
        $store = parent::update_validator($route);
        $finale = array_merge($store,$custom_validator);
        return $finale;
    }
}

