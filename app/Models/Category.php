<?php

namespace App\Models;

use Laravel\Jetstream\Category as JetstreamCategory;

class Category extends JetstreamCategory
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
