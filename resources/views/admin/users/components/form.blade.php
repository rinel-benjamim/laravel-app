<x-alert />
@csrf
<input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
<input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
<input type="password" name="password" placeholder="Senha">
<input type="submit" value="Criar">