<?php

namespace App\Http\Transformers;

use App\Portfolio\Skills\Skill;

class SkillTransformer extends Transformer
{
    /**
     * @param Skill $item
     * @return array|mixed
     */
    public function transform($item)
    {
        return [
            'id' => $item->id,
            'start_date' => $item->getStartDate(),
            'description' => $item->description,
        ];
    }
}
