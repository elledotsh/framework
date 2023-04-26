<?php 

namespace Elluminate\Controllers\Actions;

use Elluminate\Concerns\HandlesRequest;
use Elluminate\Models\BaseModel;

class BaseAction {
    
    public $model;

    public function __construct(BaseModel $model)
    {
        $this->model = get_class($model);
    }
}

