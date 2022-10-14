<?php

namespace App\Models;

class Category
{
    private static $categories = [
        [
            'id' => 1,
            'title' => 'mobile',
        ],
        [
            'id' => 2,
            'title' => 'tablet',
        ],
        [
            'id' => 3,
            'title' => 'gadgets',
        ],
        [
            'id' => 4,
            'title' => 'camera',
        ],
        [
            'id' => 5,
            'title' => 'design',
        ],
    ];

    public static function getCategories(): array
    {
        return static::$categories;
    }

    public static function getCategoryId($id): ?array
    {
        foreach (static::getCategories() as $categories) {
            if ($categories['id'] == $id) {
                return $categories;
            }
        }
        abort(404);
    }
}
