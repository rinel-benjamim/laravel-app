<h1>Create users</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Senha">
    <input type="submit" value="Criar">
</form>