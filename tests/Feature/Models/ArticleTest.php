<?php

namespace Tests\Feature\Models;

use App\Models\Article;
use App\Models\Review;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $article = Article::factory()->create();
        $users = User::factory(2)->create();
        $users->each(function ($user) use ($article) {
            Review::factory([
                'user_id' => $user->id,
                'article_id' => $article->id,
            ])->create();
        });
        $article = Article::find($article->id);
        $this->assertCount(2, $article->reviewers()->get());
    }
}
