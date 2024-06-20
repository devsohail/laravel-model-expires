<?php

namespace Devsohail\EloquentExpirable\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Devsohail\EloquentExpirable\Expirable;

class Subscription extends Model
{
    use Expirable;

    protected $guarded = [];

    protected $table = 'subscriptions';

    public $timestamps = false;
}
