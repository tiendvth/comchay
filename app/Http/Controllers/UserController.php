<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('admin/users/form', ['data' => null]);
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $user->fill($request->validated());
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->route('listUser')->with(['status' => 'create user success']);
    }


    public function list(Request $request)
    {
        $queryBuilder = User::query();
        $search = $request->get('search');
        $sort = $request->get('sort');
        $role = $request->get('role');

        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('first_name', 'like', '%' . $search . '%')
                ->orWhere('last_name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%');
        }
        if ($sort === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($sort === 2) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'ASC');
        }
        if ($role) {
            $queryBuilder = $queryBuilder->where('role', $role);
        }
        $user = $queryBuilder->paginate(10)->appends(['search' => $search, 'role' => $role]);

        return view('admin/users/table', [
            'list' => $user,
            'role' => $role,
            'sort' => $sort
        ]);

    }
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin/users/form',
            ['data' => $user]);
    }
    public function detailProfile($id)
    {
        $user = User::find($id);

        return view('clients/detail-profile',
            ['list' => $user]);
    }

    public function save($id, UserRequest $request)
    {
        $user = User::find($id);
        $data = $request->validated();
        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        $user->update($data);
        $user->save();
        return redirect()->route('listUser')->with(['status' => 'Update user success', 'user' => $user->username]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('listUser')->with(['status' => 'Delete user success', 'user' => $user->username]);
    }


}
