<?php

namespace Elluminate\Controllers\Actions;

use Elluminate\Controllers\Actions\BaseAction;
use Elluminate\Models\BaseModel;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CreateAction extends BaseAction {

    public function __construct(BaseModel $model)
    {
        parent::__construct($model);
    }

    public function handle(Request $request) : Responsable {
        return JsonResponse::create([
            'message' => 'CreateAction',
            'data' => $request->all()
        ]);
    }

}