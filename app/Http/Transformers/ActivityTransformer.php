<?php

namespace App\Http\Transformers;

use Ellllllen\Portfolio\Activities\Activity;

class ActivityTransformer extends Transformer
{
    /**
     * @param Activity $item
     * @return array|mixed
     */
    public function transform($item)
    {
        return [
            'id' => $item->id,
            'title' => $item->title,
            'description' => $item->description,
            'start_date' => $item->getStartDate(),
            'title_link' => $item->getTitleLink(),
            'display' => $item->display,
            'external' => $item->external,
        ];
    }
}
