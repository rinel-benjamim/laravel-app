<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
        User::create($request->validated());
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

    public function update(UpdateUserRequest $request, string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado.');
        }


        $data = ($request->only(['name', 'email']));

        if ($request->filled('password')) {
            $data['password'] = $request->password;
        }

        $user->update($data);

        return redirect()->route('users.index')->with('message', 'Usuário editado com sucesso!');
    }

    public function show(string $id)
    {
        $user = User::find($id);
        if (!$user) {

            return redirect()->route('users.index')->with('message', 'Usuário não encontrado.');
        }

        return view('admin.users.show', compact('user'));
    }

    public function destroy(string $id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado.');
        }

        if (auth()->user()->id === $user->id) {
            return back()->with('message', 'Você não pode deletar seu próprio usuário.');
        }

        $user->delete();
        return redirect()->route('users.index')->with('message', 'Usuário deletado com sucesso!');
    }
}
