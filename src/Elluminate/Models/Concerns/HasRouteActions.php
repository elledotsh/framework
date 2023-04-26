<?php 

namespace Elluminate\Models\Concerns;

use Elluminate\Controllers\Actions\BaseAction;
use Elluminate\Controllers\Actions\CreateAction;
use Elluminate\Controllers\Actions\DeleteAction;
use Elluminate\Controllers\Actions\IndexAction;
use Elluminate\Controllers\Actions\ShowAction;
use Elluminate\Controllers\Actions\UpdateAction;

trait HasRouteActions {
    abstract protected function is();

    public function hasIndexRoute(BaseAction $routeAction = null) : BaseAction {
        return $routeAction 
            ? new $routeAction($this->is())
            : new IndexAction($this->is());
    }
    public function hasCreateRoute(BaseAction $routeAction = null) : BaseAction {
        return $routeAction 
            ? new $routeAction($this->is())
            : new CreateAction($this->is());
    }
    public function hasDeleteRoute(BaseAction $routeAction = null) : BaseAction {
        return $routeAction 
            ? new $routeAction($this->is())
            : new DeleteAction($this->is());
    }
    public function hasShowRoute(BaseAction $routeAction = null) : BaseAction {
        return $routeAction 
            ? new $routeAction($this->is())
            : new ShowAction($this->is());
    }
    public function hasUpdateRoute(BaseAction $routeAction = null) : BaseAction {
        return $routeAction 
            ? new $routeAction($this->is())
            : new UpdateAction($this->is());
    }
}