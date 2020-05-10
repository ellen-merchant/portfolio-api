<?php

namespace Feature\Activities;

use App\Portfolio\Activities\Activity;
use Laravel\Lumen\Testing\DatabaseTransactions;
use TestCase;

class GetActivitiesTest extends TestCase
{
    use DatabaseTransactions;

    public function testGetAllActivities()
    {
        $activityOne = factory(Activity::class)->create();
        $activityTwo = factory(Activity::class)->create();

        $response = $this->call('GET', '/activities');

        $this->assertEquals(200, $response->status());

        $this->assertJson(json_encode([
            [
                "id" => $activityOne->id,
                "title" => $activityOne->title,
                "description" => $activityOne->description,
                "start_date" => $activityOne->start_date,
                "title_link" => $activityOne->title_link,
                "display" => $activityOne->display,
                "external" => $activityOne->external
            ],
            [
                "id" => $activityTwo->id,
                "title" => $activityTwo->title,
                "description" => $activityTwo->description,
                "start_date" => $activityTwo->start_date,
                "title_link" => $activityTwo->title_link,
                "display" => $activityTwo->display,
                "external" => $activityTwo->external
            ],
        ]));
    }

    public function testGetPaginatedActivities()
    {
        $activityOne = factory(Activity::class)->create();
        $activityTwo = factory(Activity::class)->create();

        $response = $this->call('GET', '/activities/paginate?page=1&limit=1');

        $this->assertEquals(200, $response->status());
        $this->assertJson(json_encode([
            ["id" => $activityOne->id, "title" => $activityOne->title]
        ]));

        $response = $this->call('GET', '/activities/paginate?page=2&limit=1');

        $this->assertEquals(200, $response->status());
        $this->assertJson(json_encode([
            ["id" => $activityTwo->id, "title" => $activityTwo->title]
        ]));
    }
}
