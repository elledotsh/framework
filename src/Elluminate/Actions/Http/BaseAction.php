<?php 

namespace Elluminate\Actions\Http;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

abstract class BaseAction {
    abstract function handle(Request $request) : JsonResponse;
}