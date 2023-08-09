<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário Aluno</title>
</head>
<body>
    <form action="{{route('aluno.store')}}" method="POST">
        @csrf
        <label for="">Nome</label><br>
        <input type="text" name="nome"><br><br>
        <label for="">Data Nascimento</label><br>
        <input type="text" name="data_nascimento"><br><br>
        <label for="">CPF</label><br>
        <input type="text" name="cpf"><br><br>
        <label for="">Email</label><br>
        <input type="email" name="email"><br><br>
        <label for="">Telefone</label><br>
        <input type="text" name="telefone"><br><br>
        <button type="submit">Salvar</button><br>
        <a href="{{route('aluno.index')}}">Voltar</a>
    </form>
</body>
</html>
