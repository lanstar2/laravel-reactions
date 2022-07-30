<?php

namespace Kesty\LaravelReactions\Tests\Integration\Support;

use Illuminate\Database\Eloquent\Model;
use Kesty\LaravelReactions\Contracts\ReactableInterface;
use Kesty\LaravelReactions\Traits\Reactable;

class PostTestModel extends Model implements ReactableInterface
{
    use Reactable;

    protected $table = 'posts';
}
