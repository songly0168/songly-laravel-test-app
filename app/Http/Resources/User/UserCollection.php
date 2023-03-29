<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    public function toArray($request): Collection
    {
        return $this->collection;
    }
}
