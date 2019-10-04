<?php

namespace Nicolassfr\Laravel\Pivot\Relations;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Nicolassfr\Laravel\Pivot\Traits\FiresPivotEventsTrait;

class MorphToManyCustom extends MorphToMany
{
    use FiresPivotEventsTrait;
}
