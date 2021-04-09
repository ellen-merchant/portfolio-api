<?php

namespace Feature\Skills;

use App\Portfolio\Skills\Skill;
use Laravel\Lumen\Testing\DatabaseTransactions;
use TestCase;

class GetSkillsTest extends TestCase
{
    use DatabaseTransactions;

    public function testGetAllSkills()
    {
        $skillOne = Skill::factory()->create();
        $skillTwo = Skill::factory()->create();

        $response = $this->call('GET', '/skills');

        $this->assertEquals(200, $response->status());

        $this->assertJson(json_encode([
            [
                "id" => $skillOne->id,
                "start_date" => $skillOne->start_date,
                "description" => $skillOne->description
            ],
            [
                "id" => $skillTwo->id,
                "start_date" => $skillTwo->start_date,
                "description" => $skillTwo->description
            ],
        ]));
    }
}
