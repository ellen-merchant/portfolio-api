<?php

namespace App\Portfolio\Articles;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class Articles
{
    /**
     * @param $limit
     * @param null $tag
     * @return LengthAwarePaginator|null
     */
    public function paginate($limit, $tag)
    {
        $query = Article::orderBy('created_at', 'desc');

        if ($tag) {
            $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('tags.id', $tag->id);
            });
        }

        return $query->paginate($limit);
    }

    /**
     * @return Collection|null
     */
    public function get()
    {
        return Article::orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * @param int $limit
     * @return Collection|null
     */
    public function getLatest(int $limit = 5)
    {
        return Article::orderBy('updated_at', 'desc')
            ->limit($limit)
            ->get();

    }
}
