<?php

namespace App\Portfolio\Articles;

use App\Presenters\Presenter;

class ArticlePresenter extends Presenter
{
    public function shortenedSection(int $length = 500): string
    {
        $section = strip_tags($this->section);

        return strlen($section) > $length ? substr($section, 0, $length) . '...' : $section;
    }
}
