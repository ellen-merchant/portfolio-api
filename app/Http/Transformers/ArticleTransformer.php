<?php

namespace App\Http\Transformers;

use App\Portfolio\Articles\Article;

class ArticleTransformer extends Transformer
{
    /**
     * @param Article $item
     * @return array|mixed
     */
    public function transform($item)
    {
        return [
            'id' => $item->id,
            'title' => $item->title,
            'section' => $item->section,
            'start_date' => $item->getCreatedAtDate(),
            'title_link' => $item->getUpdatedAtDate(),
        ];
    }
}
