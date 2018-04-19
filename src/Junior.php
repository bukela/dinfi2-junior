<?php
namespace Dinfi2\Junior;

use Illuminate\Support\Facades\Config;

class Junior {
    public $app;

    public function __construct($app) {
        $this->app = $app;
    }
    public function runTest() {
        return Config::get('junior.junior');
    }
}