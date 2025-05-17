<?php

use App\Models\Activity;

if (!function_exists('logActivity')) {
    function logActivity($type, $title, $description = null)
    {
        return Activity::create([
            'type' => $type,
            'title' => $title,
            'description' => $description,
        ]);
    }
}

if (!function_exists('getActivityColor')) {
    function getActivityColor($type)
    {
        return match ($type) {
            'create' => 'bg-green-500',
            'update' => 'bg-blue-500',
            'delete' => 'bg-red-500',
            'update_account' => 'bg-blue-100',
            'delete_account' => 'bg-red-800',
            'news'   => 'bg-purple-500',
            'music_upload'  => 'bg-yellow-500', 
            'message' => 'bg-red-600',
            default => 'bg-gray-500',
        };
    }
}

if (!function_exists('getActivityIcon')) {
    function getActivityIcon($type)
    {
        return match ($type) {
            'create' => 'fas fa-plus',
            'update' => 'fas fa-edit',
            'delete' => 'fas fa-trash',
            'news'   => 'fas fa-newspaper',
            'music_upload'  => 'fas fa-music',
            'message' => 'fas fa-envelope',
            default => 'fas fa-info-circle',
        };
    }
}
