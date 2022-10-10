<?php

namespace App\Traits;

use App\Abstracts\QueryFilter;

trait Filterable
{

    public function scopeFilter($query, QueryFilter $filters): \Illuminate\Database\Eloquent\Builder
    {
        return $filters->apply($query);
    }

}
