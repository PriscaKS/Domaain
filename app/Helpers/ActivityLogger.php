<?php

namespace App\Helpers;

use App\Models\Activity;

class ActivityLogger
{
    public static function log($type, $title, $description = null)
    {
        return Activity::create([
            'type' => $type,
            'title' => $title,
            'description' => $description,
        ]);
    }
}
