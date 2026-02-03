<?php

namespace App\Modules\Role\Presentation\Controllers;

use App\Modules\Role\Infrastructure\Persistent\Models\Role;
use App\Shared\Http\Traits\HttpResponse;
use Core\Controller;

class RoleController extends Controller
{
    use HttpResponse;

    public function index()
    {
        $roles = Role::all();
        
        return $this->view('index', 'main.layouts', [
            'title' => 'roles',
            'roles' => $roles
        ]);
    }
}