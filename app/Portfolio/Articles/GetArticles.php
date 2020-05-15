<?php

namespace App\Portfolio\Articles;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class GetArticles
{
    private $articles;

    public function __construct(Articles $articles)
    {
        $this->articles = $articles;
    }

    /**
     * @param int $limit
     * @param null $tag
     * @return LengthAwarePaginator|null
     */
    public function paginate($limit = 10, $tag = null)
    {
        return $this->articles->paginate($limit, $tag);
    }

    /**
     * @param null $limit
     * @return Collection|null
     */
    public function get($limit = null)
    {
        if ($limit) {
            return $articles = $this->articles->getLatest($limit);
        }

        return $articles = $this->articles->get();
    }

    /**
     * @param $articleID
     * @return Article
     */
    public function findOrFail($articleID): Article
    {
        return Article::findOrFail($articleID);
    }
}
