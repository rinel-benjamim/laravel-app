<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Users</h1>
    <a href="{{ route('users.create') }}">Adicionar</a>
    <table border="1px">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
                <td>-</td>
            </tr>
            @empty
            <tr>
                <td colspan="3">
                    Nenhum usuário cadastrado
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $users->links() }}
</body>

</html>