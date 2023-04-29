<?php 

namespace Elluminate\Models\Concerns;

use Elluminate\Actions\Http\BaseAction;
use Elluminate\Magic\Actions\Http;

trait HasRoutes {
    public function hasIndexRoute(BaseAction $routeAction = null) : string {
        return $routeAction 
            ? get_class($routeAction)
            : Http::index();
    }
    public function hasStoreRoute(BaseAction $routeAction = null) :string {
        return $routeAction 
            ? new $routeAction()
            : Http::store();
    }
    public function hasDeleteRoute(BaseAction $routeAction = null) :string {
        return $routeAction 
            ? new $routeAction()
            : Http::delete();
    }
    public function hasShowRoute(BaseAction $routeAction = null) :string {
        return $routeAction 
            ? new $routeAction()
            : Http::show();
    }
    public function hasUpdateRoute(BaseAction $routeAction = null) :string {
        return $routeAction 
            ? new $routeAction()
            : Http::update();
    }
}