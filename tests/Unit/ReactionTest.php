<?php
namespace Kesty\LaravelReactions\Tests\Unit;

use Kesty\LaravelReactions\Models\Reaction;

class ReactionTest extends \PHPUnit\Framework\TestCase
{
    public function testCreateFromNameShouldCreateReaction()
    {
        $reaction = Reaction::createFromName('like');

        $this->assertInstanceOf(Reaction::class, $reaction);
        $this->assertEquals('like', $reaction->name);
    }
}
