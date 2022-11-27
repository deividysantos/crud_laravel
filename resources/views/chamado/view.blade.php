<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chamados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../global.css">
</head>
<body>
    <header>
        <a class="btn btn-link" href="{{route('chamado.index')}}">Chamados</a>
        <a class="btn btn-link" href="{{route('setor.index')}}">Setores</a>
        <a class="btn btn-link" href="{{route('situacao.index')}}">Situações</a>
    </header>
    <main>
        <h1>Chamado - {{$chamado->titulo}}</h1>

        <div class="myForm">
            @csrf
            <div>
                <label>Titulo do Chamado</label>
                <input type="text" name="titulo" class="form-control mb-2" value="{{$chamado->titulo}}" readonly>

                <label>Descrição do Chamado</label>
                <input type="text" name="descricao" class="form-control mb-2" value="{{$chamado->descricao}}" readonly>

                <label>Prazo de Término</label>
                <input type="date" name="dataTermino" class="form-control mb-2" value="{{$chamado->dataTermino}}" readonly>

                <label for="setor">Setor:</label>
                <input type="text" name="descricao" class="form-control mb-2" value="{{$setor}}" readonly>

                <label for="setor">Situação:</label>
                <input type="text" name="descricao" class="form-control mb-2" value="{{$situacao}}" readonly>
            </div>
            <div class="mt-3">
                <a href="{{route('chamado.index')}}" type="button" class="btn">Voltar</a>
            </div>
            
        </div>
    </main>
</body>
</html>
