<?php

namespace App\Portfolio\Activities;

use Illuminate\Support\Collection;

class Activities
{
    /**
     * @param int $limit
     * @return Collection
     */
    public function get(int $limit = null): Collection
    {
        $query = Activity::orderBy('start_date', 'desc');
        if ($limit) {
            $query->limit($limit);
        }

        return $query->get();
    }

    public function paginate($perPage, $page)
    {
        return Activity::orderBy('start_date', 'desc')
            ->paginate($perPage);
    }
}
