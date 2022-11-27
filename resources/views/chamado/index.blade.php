<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chamados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./global.css">
</head>
<body>
    <header>
        <a class="btn btn-link" href="{{route('chamado.index')}}">Chamados</a>
        <a class="btn btn-link" href="{{route('setor.index')}}">Setores</a>
        <a class="btn btn-link" href="{{route('situacao.index')}}">Situações</a>
    </header>
    <main>
        <h1>Listagem de Chamados</h1>
        <a class="btn btn-gravar" href="{{route('chamado.novo')}}" type="button">Novo Chamado</a>

        <table class="table myTable">
            <thead>
                <tr>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ação</th>
                </tr>
            </thead>

            <tbody>
                @foreach($chamados as $chamado)
                <tr>
                    <th scope="row">{{$chamado->titulo}}</th>
                    <td>{{$chamado->descricao}}</td>
                    <td>
                        <a href="{{route('chamado.edit', [$chamado->id])}}"  class="btn">Editar</a>
                        <a href="{{route('chamado.view', [$chamado->id])}}" class="btn">Visualizar</a>
                        <a class="btn btn-apagar" href="{{route('chamado.apagar', [$chamado->id])}}" type="button">Apagar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </main>
</body>
</html>
