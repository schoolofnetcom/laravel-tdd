<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiControllerTrait;

class BanksController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relationships = [];

    public function __construct(\App\Bank $model)
    {
        $this->model = $model;
    }
}
