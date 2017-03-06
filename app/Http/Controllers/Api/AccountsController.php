<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiControllerTrait;

class AccountsController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relationships = ['bank'];

    public function __construct(\App\Account $model)
    {
        $this->model = $model;
    }
}
