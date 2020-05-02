<?php

namespace App\Portfolio\Activities;

use Illuminate\Support\Collection;

class GetActivities
{
    /**
     * @var Activities
     */
    private $activities;

    public function __construct(Activities $activities)
    {
        $this->activities = $activities;
    }

    /**
     * @param int $limit
     * @return Collection
     */
    public function get(int $limit = 5): Collection
    {
        return $this->activities->get($limit);
    }
}
