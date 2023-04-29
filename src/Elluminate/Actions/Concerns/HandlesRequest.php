<?php 

namespace Elluminate\Actions\Concerns;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

interface HandlesRequest {
    public function handle(Request $request) : JsonResponse;
}