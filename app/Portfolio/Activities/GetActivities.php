<?php

namespace App\Portfolio\Activities;

use Illuminate\Support\Collection;

class GetActivities
{
    private Activities $activities;

    public function __construct(Activities $activities)
    {
        $this->activities = $activities;
    }

    public function get(int $limit = null): Collection
    {
        return $this->activities->get($limit);
    }

    public function paginate($perPage = 10, $page = 1)
    {
        return $this->activities->paginate($perPage, $page);
    }
}
