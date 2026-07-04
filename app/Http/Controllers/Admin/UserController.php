<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Http\Requests\UserRoleRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function users()
    {
        return view('admin.users.index');
    }

    public function userRoles()
    {
        return view('admin.users.roles.index');
    }

    public function createRole()
    {
        return view('admin.users.roles.create');
    }

    public function updateRole($id)
    {
        return view('admin.users.roles.update')->with('role', Role::find($id));
    }

    public function userPermission()
    {
        return view('admin.users.permission.index');
    }

    public function createPermissions()
    {
        return view('admin.users.permission.create');
    }

    public function updatePermissions($id)
    {
        return view('admin.users.permission.update')->with('permission', Permission::find($id));
    }

    public function saveRole(UserRoleRequest $request)
    {
        $role = Role::create(['name' => $request->name]);

        if (isset($request->permissions)) {
            $permissions = [];
            foreach ($request->permissions as $permission) {
                $permissions[] = Permission::find($permission);
            }
            $role->syncPermissions($permissions);
        }

        return redirect()
            ->route('admin.users.roles')
            ->with('success', 'User Role Create Successfully!');
    }

    public function savePermissions(PermissionRequest $request)
    {
        Permission::create(['name' => $request->name]);

        return redirect()
            ->route('admin.users.permission')
            ->with('success', 'Permission Create Successfully!');
    }

    public function editRole(UserRoleRequest $request)
    {
        $role = Role::find($request->id);
        $role->name = $request->name;
        $role->save();

        $role->permissions()->detach();

        if (isset($request->permissions)) {
            $permissions = [];
            foreach ($request->permissions as $permission) {
                $permissions[] = Permission::find($permission);
            }
            $role->syncPermissions($permissions);
        }

        return redirect()
            ->route('admin.users.roles')
            ->with('success', 'User Role Update Successfully!');
    }

    public function editPermissions(Request $request)
    {
        $permission = Permission::find($request->id);
        $permission->name = $request->name;
        $permission->save();

        return redirect()
            ->route('admin.users.permission')
            ->with('success', 'Permission Update Successfully!');
    }

    public function deleteUser(Request $request)
    {
        User::find($request->id)->delete();

        return response()->json(['success' => 'User Delete successfully!']);
    }

    public function deleteRole(Request $request)
    {
        Role::find($request->id)->delete();

        return response()->json(['success' => 'User Role Delete successfully!']);
    }

    public function deletePermissions(Request $request)
    {
        Permission::find($request->id)->delete();

        return response()->json(['success' => 'Permission Delete successfully!']);
    }

    public function changeUserRole(Request $request)
    {
        $user = User::find($request->id);
        $role = Role::find($request->role_id);

        $user->roles()->detach();
        $role->users()->attach($user);

        return response()->json(['success' => 'User Role Change Successfully!']);
    }

    public function getUsers(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'name',
            2 => 'email',
            3 => 'role',
            4 => 'action',
        ];

        $totalData = User::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = User::offset($start)
                ->limit($limit)
                ->orderBy('id', 'desc')
                ->get();
            $totalFiltered = User::count();
        } else {
            $search = $request->input('search.value');
            $posts = User::where('name', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = User::where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->count();
        }

        $data = [];

        if ($posts) {
            foreach ($posts as $r) {
                $nestedData['id'] = $r->id;
                $nestedData['name'] = $r->name;
                $nestedData['email'] = $r->email;
                $nestedData['role'] = '<span class="badge badge-pill badge-'.$r->roles_color.'">'.$r->roles[0]->name.'</span>';
                $nestedData['action'] = '<a class="btn btn-outline-primary btn-sm edit" data-data='.base64_encode($r).' data-toggle="modal" data-target="#changeRole"><i class="fas fa-edit"></i> Change Role</a>&nbsp;&nbsp;<a class="btn btn btn-outline-danger btn-sm edit"  onClick="deleteUser('.$r->id.')"> <i class="fas fa-trash"></i> Delete</a>';
                $data[] = $nestedData;
            }
        }

        $json_data = [
            'draw' => intval($request->input('draw')),
            'recordsTotal' => intval($totalData),
            'recordsFiltered' => intval($totalFiltered),
            'data' => $data,
        ];

        echo json_encode($json_data);
    }

    public function getUserRole(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'name',
            2 => 'guard_name',
            3 => 'action',

        ];

        $totalData = Role::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = Role::offset($start)
                ->limit($limit)
                ->orderBy('id', 'desc')
                ->get();
            $totalFiltered = Role::count();
        } else {
            $search = $request->input('search.value');
            $posts = Role::where('name', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Role::where('name', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->count();
        }

        $data = [];

        if ($posts) {
            foreach ($posts as $r) {
                $nestedData['id'] = $r->id;
                $nestedData['name'] = $r->name;
                $nestedData['guard_name'] = $r->guard_name;
                $nestedData['action'] = '<a class="btn btn btn-outline-primary  btn-sm edit" href='.route('admin.users.role.update', ['id' => $r->id]).'><i class="fas fa-edit"></i> Edit</a>&nbsp;&nbsp;<a class="btn btn btn-outline-danger btn-sm edit"  onClick="deleteRole('.$r->id.')"> <i class="fas fa-trash"></i> Delete</a>';
                $data[] = $nestedData;
            }
        }

        $json_data = [
            'draw' => intval($request->input('draw')),
            'recordsTotal' => intval($totalData),
            'recordsFiltered' => intval($totalFiltered),
            'data' => $data,
        ];

        echo json_encode($json_data);
    }

    public function getUserPermissions(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'name',
            2 => 'guard_name',
            3 => 'action',

        ];

        $totalData = Permission::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = Permission::offset($start)
                ->limit($limit)
                ->orderBy('id', 'desc')
                ->get();
            $totalFiltered = Permission::count();
        } else {
            $search = $request->input('search.value');
            $posts = Permission::where('name', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Permission::where('name', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->count();
        }

        $data = [];

        if ($posts) {
            foreach ($posts as $r) {
                $roleName = [];
                foreach ($r->roles as $role) {
                    $roleName[] = $role->name;
                }

                $nestedData['id'] = $r->id;
                $nestedData['name'] = $r->name;
                $nestedData['roles'] = isset($roleName) ? $roleName : '';
                $nestedData['action'] = '<a class="btn btn btn-outline-primary btn-sm edit" href='.route('admin.users.permissions.update', ['id' => $r->id]).'><i class="fas fa-edit"></i> Edit</a>&nbsp;&nbsp;<a class="btn btn btn-outline-danger btn-sm edit"  onClick="deletePermission('.$r->id.')"> <i class="fas fa-trash"></i> Delete</a>';
                $data[] = $nestedData;
            }
        }

        $json_data = [
            'draw' => intval($request->input('draw')),
            'recordsTotal' => intval($totalData),
            'recordsFiltered' => intval($totalFiltered),
            'data' => $data,
        ];

        echo json_encode($json_data);
    }
}
