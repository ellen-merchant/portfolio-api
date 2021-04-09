<?php

namespace App\Portfolio\Articles;

use App\Portfolio\Articles\Tags\Tag;
use App\Portfolio\PortfolioModel;
use App\Presenters\PresenterInterface;
use App\Presenters\PresenterTrait;
use Carbon\Carbon;

class Article extends PortfolioModel implements PresenterInterface
{
    use PresenterTrait;

    protected $presenter = ArticlePresenter::class;

    protected $fillable = ['title', 'image', 'section', 'view'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags');
    }

    public function getCreatedAtDate()
    {
        return Carbon::createFromTimestamp(strtotime($this->created_at))
            ->format('d-m-Y');
    }

    public function getUpdatedAtDate()
    {
        return Carbon::createFromTimestamp(strtotime($this->updated_at))
            ->format('d-m-Y');
    }
}
