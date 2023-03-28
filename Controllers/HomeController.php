<?php

namespace Controllers;

use Source\Renderer;
use Models\User;

class HomeController
{

    public function index(): Renderer
    {
        $userModel = new User();
        $users = $userModel->all();

        return Renderer::make('home/index', compact('users'));
    }
}