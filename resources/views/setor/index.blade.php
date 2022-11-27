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
    <link rel="stylesheet" href="../../global.css">
</head>
<body>
    <header>
        <a class="btn btn-link" href="{{route('chamado.index')}}">Chamados</a>
        <a class="btn btn-link" href="{{route('setor.index')}}">Setores</a>
        <a class="btn btn-link" href="{{route('situacao.index')}}">Situações</a>
    </header>
    <main>     
    <h1>Listagem de Setores</h1>
    @if(isset($messageError))
        <div class="messageError">
            <span>Ação Cancelada</span>
            <p>{{$messageError}}</p>
        </div>
    @endif
    <a href="{{route('setor.novo')}}" type="button" class="btn btn-gravar">Novo Setor</a>
            <table class="table myTable">
                <thead>
                  <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ação</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach($setores as $setor)
                    <tr>
                        <th scope="row">{{$setor->id}}</th>
                        <td>{{$setor->descricao}}</td>
                        <td>
                            <a href="{{route('setor.apagar', [$setor->id])}}" type="button" class="btn btn-apagar">Apagar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </main>
</body>
</html>
