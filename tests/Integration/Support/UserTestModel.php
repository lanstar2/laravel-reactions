<?php

namespace Kesty\LaravelReactions\Tests\Integration\Support;

use Illuminate\Database\Eloquent\Model;
use Kesty\LaravelReactions\Traits\Reacts;

class UserTestModel extends Model
{
    use Reacts;

    protected $table = 'users';
}
