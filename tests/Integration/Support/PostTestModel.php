<?php

namespace DevDojo\LaravelReactions\Tests\Integration\Support;

use Illuminate\Database\Eloquent\Model;
use DevDojo\LaravelReactions\Contracts\ReactableInterface;
use DevDojo\LaravelReactions\Traits\Reactable;

class PostTestModel extends Model implements ReactableInterface
{
    use Reactable;

    protected $table = 'posts';
}
