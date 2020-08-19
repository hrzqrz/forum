<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Faker\Factory;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function a_user_can_view_all_threads()
    {
        //$thread = \factory('App\Thread')->create();
        $threads = \factory('App\Thread')->create();
        $response = $this->get('/threads');

        $response->assertSee($threads->title);

        //$response = $this->get('/threads/' . $thread->id);
        //$response->assertSee($thread->title);

    }

    public function a_user_can_view_a_single_thread()
    {
        /** @test */
        $thread = \factory('App\Thread')->create();
        $response = $this->get('/threads/' . $thread->id);
        $response->assertSee($thread->title);
    }
}
