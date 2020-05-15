<?php

namespace Feature\Articles;

use App\Portfolio\Articles\Article;
use Laravel\Lumen\Testing\DatabaseTransactions;
use TestCase;

class GetArticlesTest extends TestCase
{
    use DatabaseTransactions;

    public function testGetAllArticles()
    {
        $articleOne = factory(Article::class)->create();
        $articleTwo = factory(Article::class)->create();

        $response = $this->call('GET', '/articles');
        $this->assertEquals(200, $response->status());

        $this->assertJson(json_encode([
            [
                "id" => $articleOne->id,
                "title" => $articleOne->title,
                "section" => $articleOne->section,
                "start_date" => $articleOne->created_at,
                "title_link" => $articleOne->updated_at,
            ],
            [
                "id" => $articleTwo->id,
                "title" => $articleTwo->title,
                "section" => $articleTwo->section,
                "start_date" => $articleTwo->created_at,
                "title_link" => $articleTwo->updated_at,
            ],
        ]));
    }

    public function testGetPaginatedArticles()
    {
        $articleOne = factory(Article::class)->create();
        $articleTwo = factory(Article::class)->create();

        $response = $this->call('GET', '/articles/paginate?page=1&limit=1');

        $this->assertEquals(200, $response->status());
        $this->assertJson(json_encode([
            ["id" => $articleOne->id, "title" => $articleOne->title]
        ]));

        $response = $this->call('GET', '/articles/paginate?page=2&limit=1');

        $this->assertEquals(200, $response->status());
        $this->assertJson(json_encode([
            ["id" => $articleTwo->id, "title" => $articleTwo->title]
        ]));
    }
}
