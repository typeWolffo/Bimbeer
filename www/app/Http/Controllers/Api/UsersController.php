<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\UsersInformation;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $usersInformation;

    public function __construct(
        UsersInformation $usersInformation
    ) {
        $this->usersInformation = $usersInformation;
    }

    public function index() {
        return $this->usersInformation->all();
    }
}
