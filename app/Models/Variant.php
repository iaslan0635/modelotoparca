<?php

namespace App\Models;

use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;

class Variant extends BaseModel implements CanVisit
{
    use HasVisits;
}
