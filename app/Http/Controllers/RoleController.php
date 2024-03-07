<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Services\RoleService;
use Illuminate\Http\Request;
use Illuminate\Json\Validation\ValidationException;
class RoleController extends Controller
{
    protected $roleService;
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }
    public function index()
    {
        $roles = $this->roleService->getAllRoles();
        return response()->json($roles);
    }
    public function show(Request $request)
    {
        $role = $this->roleService->getRole($request->id);
        return response()->json($role);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255']  
        ]);
        $role = $this->roleService->createRole($data); 
        return response()->json($role);
    }
    public function update(Request $request, Role $role)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);
        $role = $this->roleService->updateRole($role, $data); 
        return response()->json($role);
    }
    public function destroy(Role $role)
    {
        $role = $this->roleService->deleteRole($role);
        return response()->json($role);      
    }
}
