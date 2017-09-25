<?php

namespace Tests\Feature\Zendesk;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SyncerTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_queues_request_before_sending_it_to_zendesk()
    {
        $response = $this->json('put', '/zendesk/ticket', [
          "arriba" => "refactor",

        ]);
    }
}
