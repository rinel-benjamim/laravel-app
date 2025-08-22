<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request)
    {

        User::create($request->all());
        return redirect()->route('users.index')->with('message', 'Usuário criado com sucesso!');
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado.');
        }
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado.');
        }

        $user->update(($request->only(['name', 'email'])));

        return redirect()->route('users.index')->with('message', 'Usuário editado com sucesso!');
    }
}
