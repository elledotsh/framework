<?php 

declare(strict_types=1);

namespace Elluminate\Magic\Actions;

class Http {
    public static function index() : string {
        return 'MAGIC::ROUTE::INDEX';
    }
    public static function store() : string {
        return 'MAGIC::ROUTE::STORE';
    }
    public static function delete() : string {
        return 'MAGIC::ROUTE::DELETE';
    }
    public static function show() : string {
        return 'MAGIC::ROUTE::SHOW';
    }
    public static function update() : string {
        return 'MAGIC::ROUTE::UPDATE';
    }
}