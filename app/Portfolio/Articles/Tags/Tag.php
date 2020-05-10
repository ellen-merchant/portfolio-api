<?php

namespace App\Portfolio\Articles\Tags;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    const ABOUT_ME = 1;
    const NOTES = 2;
    const PROJECTS = 3;
    const DEFAULT_TAGS = [self::ABOUT_ME, self::NOTES, self::PROJECTS];
}
