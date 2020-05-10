<?php

namespace Feature\Activities;

use App\Portfolio\Activities\Activity;
use TestCase;

class GetActivitiesTest extends TestCase
{
    public function testGetAllActivities()
    {
        $response = $this->call('GET', '/activities');

        $this->assertEquals(200, $response->status());

        $this->assertJson(json_encode([
            ["id" => 10, "title" => "VueJS Testing", "description" => "Following a Laracasts tutorial on how to test VueJS apps: https://laracasts.com/series/testing-vue", "start_date" => "2019-06-13", "title_link" => "https://github.com/ellllllen/testing-vue", "display" => "1", "external" => "1"],
            ["id" => 9, "title" => "VueJS Portfolio", "description" => "I have rewritten my personal website. It is now a static VueJS multi-page app.", "start_date" => "2019-04-19", "title_link" => "/articles/12", "display" => "1", "external" => "0"],
            ["id" => 8, "title" => "React Bootcamp", "description" => "Following Tyler McGinnis React Bootcamp.", "start_date" => "2019-01-26", "title_link" => "/articles/10", "display" => "1", "external" => "0"],
            ["id" => 7, "title" => "Added Chatbot to Personal Website", "description" => "Using the BotMan plugin I created a chatbot that tells my visitors some jokes.", "start_date" => "2018-11-16", "title_link" => "/articles/11", "display" => "1", "external" => "0"],
            ["id" => 6, "title" => "Travis CI (Part 2)", "description" => "Managed to implement Browser tests using Travis CI on my personal website. Also added Travis CI to my other repositories.", "start_date" => "2018-11-01", "title_link" => "https://travis-ci.com/ellllllen", "display" => "1", "external" => "1"],
            ["id" => 5, "title" => "Travis CI (Part 1)", "description" => "Implemented Travis CI on my personal website.", "start_date" => "2018-10-11", "title_link" => "https://travis-ci.com/ellllllen/personal-website", "display" => "1", "external" => "1"],
            ["id" => 4, "title" => "Continuous Integration", "description" => "Now I've lots of automated tests I am now researching and implementing continuous integration and deployment(CI and CD).", "start_date" => "2018-08-01", "title_link" => "/articles/9", "display" => "1", "external" => "0"],
            ["id" => 3, "title" => "Automated Testing", "description" => "Researching and implementing automated testing. So writing loads unit, feature and browser tests for my personal website.", "start_date" => "2018-06-21", "title_link" => "https://github.com/ellllllen/personal-website", "display" => "1", "external" => "1"],
            ["id" => 2, "title" => "Scalable Microservices with Kubernetes", "description" => "Free Udacity Course, learning to containerise applications with Docker and Kubernetes.", "start_date" => "2018-06-10", "title_link" => "https://eu.udacity.com/course/scalable-microservices-with-kubernetes--ud615", "display" => "1", "external" => "1"],
            ["id" => 1, "title" => "Chatbot", "description" => "Started following a tutorial on how to build a chatbot in PHP using Laravel and Botman.", "start_date" => "2018-06-06", "title_link" => "https://github.com/ellllllen/chatbot", "display" => "1", "external" => "1"]
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
