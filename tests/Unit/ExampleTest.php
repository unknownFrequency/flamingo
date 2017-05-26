<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Post;

class ExampleTest extends TestCase
{
    /**
     * Test 2 Post records in DB, each posted 1 month apart
     *
     * @return void
     */
    public function testBasicTest()
    {
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        // Fetch archives
        $posts = Post::archives();

        dd($posts);

        $this->assertEquals([
            "year" => $first->created_at->format('Y'),
            "month" => $first->created_at->format('F'),
            "punlished" => 1
        ], $posts);
    }
}
