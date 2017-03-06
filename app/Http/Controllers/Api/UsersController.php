<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiControllerTrait;

class UsersController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relationships = [];

    public function __construct(\App\User $model)
    {
        $this->model = $model;
    }
}
