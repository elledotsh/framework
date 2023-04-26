<?php

namespace Elluminate\Models;

use Elluminate\Models\Concerns\HasRouteActions;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Elluminate\Concerns\Is;

class BaseModel {

	use HasRouteActions;
	use HasRelationships;
	use Is;

	protected $guarded = [];
	protected $hidden = [];

	public function endpoints() : array 
	{
    	return [
			'index' => $this->hasIndexRoute(),
			'create' => $this->hasCreateRoute(),
			'show' => $this->hasShowRoute(),
			'update' => $this->hasUpdateRoute(),
			'delete' => $this->hasDeleteRoute(),
		];
  	}

	public function relationships() : array 
	{
		return [
			
		];
	}

	public function scopes() : array 
	{
		return [

		];
	}
}