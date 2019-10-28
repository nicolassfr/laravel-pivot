<?php

namespace Nicolassfr\Laravel\Pivot\Tests\Models;

class Role extends BaseModel
{
    protected $table = 'roles';

    protected $fillable = ['name'];
}
