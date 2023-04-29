<?php

namespace Elluminate\Models;

use Elluminate\Models\Concerns\HasRoutes;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;

class BaseModel
{
    use HasRoutes;
    use HasRelationships;

    protected $guarded = [];
    protected $hidden = [];

    public function endpoints(): array
    {
        return [
            $this->hasIndexRoute(),
            $this->hasShowRoute(),
            $this->hasStoreRoute(),
            $this->hasUpdateRoute(),
            $this->hasDeleteRoute(),
        ];
    }

    public function relationships(): array
    {
        return [

        ];
    }

    public function scopes(): array
    {
        return [

        ];
    }
}
